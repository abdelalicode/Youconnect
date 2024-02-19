<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function connexion()
    {
        return view("connexion");
    }
    public function inscription()
    { 
        
        return view("inscription");
    }

    public function signing(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return redirect()->route("homepage");
        } else {
            return redirect()->back()->withErrors(['message' => 'Invalid credentials']);
        }
    }

    public function signup(Request $request)
    
    {
        $request->validate([
            'firstName' => 'required|string|min:4|max:12',
            'lastName' =>  'required|string|min:4|max:12',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
        ]);
       
        $user = new User();
        $user->firstName = $request->input("firstName"); 
        $user->lastName = $request->input("lastName");
        $user->email = $request->input("email");
        $user->password = bcrypt($request->input("password")); 
        $user->save();
        return redirect()->route("connexion");
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('homepage')->with('success', 'You have been logged out successfully.');
    }
}
