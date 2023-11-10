<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function showRegistrationForm() {
        return view('registration');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'phonenumber' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = new User([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'phonenumber' => $validatedData['phonenumber'],
            'username' => $validatedData['username'],
            'password' => bcrypt($validatedData['password']), // Hash the password for security
        ]);
        $user->save();

        auth()->login($user);

        return redirect()->route('dashboard')->with('success', 'Registration and login successful.');
    }
}