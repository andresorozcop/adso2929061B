<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Kind</th>
                <th>Weight</th>
                <th>Age</th>
                <th>Breed</th>
                <th>Location</th>
                <th>Active</th>
                <th>Adopted</th>
                <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pets as $pet)
                <tr>
                    <td>{{$pet->id}}</td>
                    <td>{{$pet->name}}</td>
                    <td>{{$pet->kind}}</td>
                    <td>{{$pet->weight}}</td>
                    <td>{{$pet->age}}</td>
                    <td>{{$pet->breed}}</td>
                    <td>{{$pet->location}}</td>
                    <td>
                        @if ($pet->active == 1)
                            Yes
                        @else
                            No
                        @endif
                    </td>
                    <td>
                        @if ($pet->adopted == 1)
                            Yes
                        @else
                            No
                        @endif
                    </td>
                    <td>
                        @php
                            $extension = substr($pet->image, -4);
                        @endphp
                        @if ($extension != 'webp' && $extension != '.svg')
                        <img src="{{public_path().'/images/pets/'.$pet->image}}" width="96px">
                        @else
                            Webp|SVG
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
