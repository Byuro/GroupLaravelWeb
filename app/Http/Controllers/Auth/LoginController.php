<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login'); // This is the login view
    }

    // Handle login attempt
    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    // Attempt login with credentials
    if (Auth::attempt($credentials, $request->remember)) {
        // Authentication passed
        return redirect()->route('admin.dashboard'); // Redirect to the admin dashboard
    }

    // Authentication failed
    return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
}



    // Log the user out
    public function logout()
    {
        Auth::logout();
        return redirect('login'); // Redirect to homepage or any other URL
    }
}
