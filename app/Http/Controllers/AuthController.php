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

    public function EditeProfil(Request $request)
    {
         $user = Auth::user();
        return view('EditeProfil', compact('user'));
    }

    public function updateProfile(Request $request)
{
    $user = Auth::user();

    $request->validate([
        'firstName' => 'required|string|min:4|max:12',
        'lastName' =>  'required|string|min:4|max:12',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'password' => 'nullable|min:6',
        'password_confirmation' => 'nullable|same:password',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $user->firstName = $request->input("firstName");
    $user->lastName = $request->input("lastName");
    $user->email = $request->input("email");

    if ($request->filled('password')) {
        $user->password = bcrypt($request->input("password"));
    }

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');
        $user->image = $imagePath;
    }

    $user->save();

    return redirect()->back()->with('success', 'Profile updated successfully.');
}

public function destroy()
{
    $user = Auth::user();

    $user->posts()->delete();

    $user->delete();

    Auth::logout();

    return redirect()->route('homepage')->with('success', 'Your account has been deleted successfully.');
}
public function userList()
{
    $users = User::all(); // Récupérer tous les utilisateurs

    return view('userList', compact('users'));
}
}
