<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
    <style>
        table { width: 100%; border-collapse: collapse; font-size: 11px; font-family: DejaVu Sans, sans-serif; }
        th { background-color: #e8e8e8; padding: 6px 8px; text-align: left; border: 1px solid #ccc; }
        td { padding: 5px 8px; border: 1px solid #ddd; vertical-align: top; }
        .row-alt { background-color: #f5f5f5; }
    </style>
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
                <tr class="{{ $loop->iteration % 2 === 0 ? 'row-alt' : '' }}">
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
