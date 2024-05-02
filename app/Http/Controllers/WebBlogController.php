<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;

class WebBlogController extends Controller
{
    public function showSignupForm()
    {
        return view('signup');
    }
    
    public function showSigninForm()
    {
        return view('signin');
    }
   
    public function signup(Request $request)
    {
        return view('signin');
        $input = $request->all();
        User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => bcrypt($input['password']),
        ]);

        return view('signin');
           
      

       
       

        // // Redirect to login page
        // return view('signin');
    }
    public function check(Request $request){
        
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return view('home');
        }

    //         if (Auth::attempt($credentials)){
    //             return view('home');
    //         }
    //         return "<h2>User name or password is Invalid</h2>";
    // }
}
}
