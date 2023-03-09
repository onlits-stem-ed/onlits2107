<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->save();
        $first_name = strtok($user->name, ' ');
        $last_name = strtok(' ');
        $resume = array('first_name' => $first_name, 'last_name' => $last_name, 'email' => $user->email);
        return view('new_resume', ['resume' => $resume]);
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            $resume = Resume::where('email', $request->email)->first();
            if ($resume) {
                return view('existing_resume', ['resume' => $resume]);
            } else {
                $first_name = strtok($user->name, ' ');
                $last_name = strtok(' ');
                $resume = array('first_name' => $first_name, 'last_name' => $last_name, 'email' => $user->email);
                return view('new_resume', ['resume' => $resume]);
            }
        } else {
            return view('login');
        }
    }
}
