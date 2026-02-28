<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get All Pets(View)</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-emerald-700 min-h-dvh p-14"> 
   <h1 class="text-emerald-200 text-4xl text-center borde-b-2 pb-4">Get All Pets(View)</h1>
   <table class="table table-border mt-5 bg-emerald-200">
    <thead>
        <tr class="bg-emerald-900 text-emerald-200">
            <th class="w-20">IMAGE</th>
            <th class="w-12">ID</th>
            <th class="w-24">NAME</th>
            <th class="w-16">KIND</th>
            <th class="w-20">BREED</th>
            <th class="w-20">ACTIONS</th>
        </tr>
    </thead>
    <tbody>
       @foreach ($pets as $pet)
            <tr class="even:bg-emerald-300">
                <td class="w-20"><img src="{{ asset('images/larapets_generica.png') }}" alt="Pet Image" class="w-16 h-16 object-cover rounded"></td>
                <td class="w-12">{{ $pet->id }}</td>
                <td class="w-24">{{ $pet->name }}</td>
                <td class="w-16">{{ $pet->kind }}</td>
                <td class="w-20">{{ $pet->breed }}</td>
                <td class="w-20">
                    <a href="{{ url('show/pet/' . $pet->id) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M152,112a8,8,0,0,1-8,8H120v24a8,8,0,0,1-16,0V120H80a8,8,0,0,1,0-16h24V80a8,8,0,0,1,16,0v24h24A8,8,0,0,1,152,112Zm77.66,117.66a8,8,0,0,1-11.32,0l-50.06-50.07a88.11,88.11,0,1,1,11.31-11.31l50.07,50.06A8,8,0,0,1,229.66,229.66ZM112,184a72,72,0,1,0-72-72A72.08,72.08,0,0,0,112,184Z"></path></svg>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
   </table>

</body >
</html>