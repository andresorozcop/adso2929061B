<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Pet;

Route::get('/', function () {
    return view('welcome');
});


Route::get('sayhello/{name}', function($name) {
    return "<h1>Hello: $name</h1>";
});

Route::get('getall/pets', function() {
    $pets = App\Models\Pet::all();
    return view('getallpets', compact('pets'));
});

Route::get('show/pet/{id}', function() {
    $pet = App\Models\Pet::find(request()->id);
    return view('showpet', compact('pet'));
});

Route::get('/users', [UserController::class, 'showUsers']);
