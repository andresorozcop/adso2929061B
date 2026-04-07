<?php

namespace App\Http\Controllers;

use App\Models\Adoption;
use App\Models\Pet;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\pdf;
use App\Exports\PetsExport;
use Maatwebsite\Excel\Facades\Excel;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pets = Pet::all();
        $pets = Pet::orderBy('id', 'desc')->paginate(12);
        return view('pets.index')->with('pets', $pets);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validation = $request->validate([
            'name'          => ['required', 'string'],
            'kind'          => ['required', 'in:dog,cat,pig,bird'],
            'weight'        => ['required', 'numeric'],
            'age'           => ['required', 'integer'],
            'breed'         => ['required', 'string'],
            'location'      => ['required', 'string'],
            'description'   => ['required', 'string'],
            'image'         => ['required', 'image'],
        ]);

        if ($validation) {
            if ($request->hasFile('image')) {
                $image = time().'.'.$request->image->extension();
                $request->image->move(public_path('images/pets'), $image);
            }
        }

        $pet = new Pet;
        $pet->name = $request->name;
        $pet->kind = $request->kind;
        $pet->weight = $request->weight;
        $pet->age = $request->age;
        $pet->breed = $request->breed;
        $pet->location = $request->location;
        $pet->description = $request->description;
        $pet->image = $image;
        $pet->active = 1;
        $pet->adopted = 0;

        if ($pet->save()) {
            return redirect('pets')
                    ->with('message', 'The Pet: '.$pet->name.' was added successful!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet $pet)
    {
        return view('pets.show')
                ->with('pet', $pet);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet $pet)
    {
        return view('pets.edit')
                ->with('pet', $pet);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pet $pet)
    {
        $validation = $request->validate([
            'name'          => ['required', 'string'],
            'kind'          => ['required', 'in:dog,cat,pig,bird'],
            'weight'        => ['required', 'numeric'],
            'age'           => ['required', 'integer'],
            'breed'         => ['required', 'string'],
            'location'      => ['required', 'string'],
            'description'   => ['required', 'string'],
        ]);

        if ($validation) {
            if ($request->hasFile('image')) {
                $image = time().'.'.$request->image->extension();
                $request->image->move(public_path('images/pets'), $image);
                if ($request->originimage != 'no-image.png' && file_exists(public_path('images/pets/'.$pet->image))) {
                    unlink(public_path('images/pets/'.$pet->image));
                }
            } else {
                $image = $request->originimage;
            }
        }

        $pet->name = $request->name;
        $pet->kind = $request->kind;
        $pet->weight = $request->weight;
        $pet->age = $request->age;
        $pet->breed = $request->breed;
        $pet->location = $request->location;
        $pet->description = $request->description;
        $pet->image = $image;

        if ($pet->save()) {
            return redirect('pets')
                    ->with('message', 'The Pet: '.$pet->name.' was edited successful!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet $pet)
    {
        $imageFile = $pet->image;
        Adoption::where('pet_id', $pet->id)->delete();

        if ($pet->delete()) {
            if ($imageFile != 'no-image.png' && file_exists(public_path('images/pets/'.$imageFile))) {
                unlink(public_path('images/pets/'.$imageFile));
            }

            return redirect('pets')
                    ->with('message', 'The Pet: '.$pet->name.' was delete   successful!');
        }
    }

    /**
     * Generate a PDF file
     */
    public function pdf()
    {
        $pets = Pet::all();
        $pdf = PDF::loadView('pets.pdf', compact('pets'));
        return $pdf->download('allpets.pdf');
    }

    /**
     * Generate a Excel file
     */
    public function excel()
    {
        return Excel::download(new PetsExport, 'allpets.xlsx');
    }

    public function search(Request $request)
    {
        $pets = Pet::names($request->q)->orderBy('id', 'desc')->paginate(12);
        return view('pets.search')->with('pets', $pets);
    }
}
