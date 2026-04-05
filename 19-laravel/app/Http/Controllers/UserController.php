<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class UserController extends Controller
{
    public function showUsers()
    {
        $users = User::take(20)->get();

        $output = '<html><head><style>table { width:100%; border-collapse:collapse; } th, td { border:1px solid black; padding:8px; text-align:left; } tr:nth-child(even) { background-color: #f2f2f2; }</style></head><body>';
        $output .= '<table>';
        $output .= '<tr><th>Photo</th><th>Fullname</th><th>Age</th><th>Created</th></tr>';

        foreach ($users as $user) {
            $age = Carbon::parse($user->birthdate)->age;
            $timeAgo = Carbon::parse($user->created_at)->diffForHumans();

            $output .= '<tr>';
            $output .= '<td><img src="' . asset('images/' . $user->photo) . '" alt="Photo" width="50" height="50"></td>';
            $output .= '<td>' . htmlspecialchars($user->fullname) . '</td>';
            $output .= '<td>' . htmlspecialchars($age . ' years old') . '</td>';
            $output .= '<td>created ' . htmlspecialchars($timeAgo) . '</td>';
            $output .= '</tr>';
        }

        $output .= '</table></body></html>';

        return response($output)->header('Content-Type', 'text/html');
    }
}
