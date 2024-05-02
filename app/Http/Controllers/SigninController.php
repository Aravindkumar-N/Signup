<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;

class SigninController extends Controller
{

    public function check(Request $request){
        // return view('home');
        // $credentials = $request->validate(
        //     [
        //         'email' => ['required','email'],
        //         'password' => ['required'],
        //     ]
        //     );

        //     if (Auth::attempt($credentials)){
        //         return view('home');
        //     }
        //     return "<h2>User name or password is Invalid</h2>";
                $credentials = $request->only('email', 'password');

                if (Auth::attempt($credentials)) {
                    // Authentication passed...
                    return redirect()->route('home');
                }

                return back()->withErrors(['email' => 'Invalid credentials.']);
            }

            // Add this method if you want to show the welcome page
            public function home()
            {
                return view('home');
            }
}
