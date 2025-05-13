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
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('auth.login');
    }

    // Handle login attempt
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Check if the provided email and password match the admin credentials
        if ($credentials['email'] === 'admin@gmail.com' && $credentials['password'] === 'admin123') {
            // Manually log in the admin user without database
            // You need to create a dummy user object for this

            $admin = new \App\Models\User();
            $admin->id = 1;
            $admin->name = 'Admin';
            $admin->email = 'admin@gmail.com';

            Auth::login($admin);

            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
    }

    // Log the user out
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
