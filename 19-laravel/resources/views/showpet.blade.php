<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Pet Details</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-emerald-700 min-h-dvh p-14">
   <div class="absolute top-1 left-1 z-10">
       <a href="{{ url('getall/pets') }}" class="text-emerald-200 hover:text-emerald-100">
           <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#064e3b" viewBox="0 0 256 256">
               <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm48-88a8,8,0,0,1-8,8H107.31l18.35,18.34a8,8,0,0,1-11.32,11.32l-32-32a8,8,0,0,1,0-11.32l32-32a8,8,0,1,11.32,11.32L107.31,120H168A8,8,0,0,1,176,128Z"></path>
           </svg>
       </a>
   </div>
   <h1 class="text-emerald-200 text-4xl text-center borde-b-2 pb-4">Show Pet Details</h1>
   <div class="text-center mb-5">
       <img src="{{ asset('images/larapets_generica.png') }}" alt="Pet Image" class="w-48 h-48 object-cover rounded-lg mx-auto">
   </div>
   <table class="table table-border mt-5 bg-emerald-200">
    <tbody>
        <tr class="even:bg-emerald-300">
            <td class="font-bold bg-emerald-900 text-emerald-200 w-32">ID</td>
            <td class="w-64">{{ $pet->id }}</td>
        </tr>
        <tr class="even:bg-emerald-300">
            <td class="font-bold bg-emerald-900 text-emerald-200 w-32">NAME</td>
            <td class="w-64">{{ $pet->name }}</td>
        </tr>
        <tr class="even:bg-emerald-300">
            <td class="font-bold bg-emerald-900 text-emerald-200 w-32">KIND</td>
            <td class="w-64">{{ $pet->kind }}</td>
        </tr>
        <tr class="even:bg-emerald-300">
            <td class="font-bold bg-emerald-900 text-emerald-200 w-32">BREED</td>
            <td class="w-64">{{ $pet->breed }}</td>
        </tr>
        <tr class="even:bg-emerald-300">
            <td class="font-bold bg-emerald-900 text-emerald-200 w-32">WEIGHT</td>
            <td class="w-64">{{ $pet->weight }}</td>
        </tr>
        <tr class="even:bg-emerald-300">
            <td class="font-bold bg-emerald-900 text-emerald-200 w-32">AGE</td>
            <td class="w-64">{{ $pet->age }}</td>
        </tr>
        <tr class="even:bg-emerald-300">
            <td class="font-bold bg-emerald-900 text-emerald-200 w-32">LOCATION</td>
            <td class="w-64">{{ $pet->location }}</td>
        </tr>
        <tr class="even:bg-emerald-300">
            <td class="font-bold bg-emerald-900 text-emerald-200 w-32">DESCRIPTION</td>
            <td class="w-64">{{ $pet->description }}</td>
        </tr>
        <tr class="even:bg-emerald-300">
            <td class="font-bold bg-emerald-900 text-emerald-200 w-32">ACTIVE</td>
            @if($pet->active == 1)
                <td class="w-64 bg-green-400 text-white">True</td>
            @else
                <td class="w-64 bg-red-400 text-white">False</td>
            @endif
        </tr>
        <tr class="even:bg-emerald-300">
            <td class="font-bold bg-emerald-900 text-emerald-200 w-32">ADOPTED</td>
            @if($pet->adopted == 1)
                <td class="w-64 bg-green-500 text-white">Adoptado</td>
            @else
                <td class="w-64 bg-red-400 text-white">Disponible</td>
            @endif
        </tr>
        <tr class="even:bg-emerald-300">
            <td class="font-bold bg-emerald-900 text-emerald-200 w-32">CREATED_AT</td>
            <td class="w-64">{{ $pet->created_at->diffForHumans() }}</td>
        </tr>
        <tr class="even:bg-emerald-300">
            <td class="font-bold bg-emerald-900 text-emerald-200 w-32">UPDATED_AT</td>
            <td class="w-64">{{ $pet->updated_at->diffForHumans() }}</td>
        </tr>
    </tbody>
   </table>

</body >
</html>
