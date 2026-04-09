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
                <th>Fullname</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Active</th>
                <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr class="{{ $loop->iteration % 2 === 0 ? 'row-alt' : '' }}">
                    <td>{{$user->id}}</td>
                    <td>{{$user->fullname}}</td>
                    <td>{{$user->gender}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @if ($user->active == 1)
                            Yes
                        @else
                            No
                        @endif
                    </td>
                    <td>
                        @php
                            $extension = substr($user->photo, -4);
                        @endphp
                        @if ($extension != 'webp' && $extension != '.svg')
                        <img src="{{ $user->userPhotoAbsolutePath() }}" width="96px">
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