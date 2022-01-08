<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Default method, show login form
    public function index()
    {
        return $this->login();
    }

    // Show login form
    public function login()
    {
        return view('auth.login');
    }

    // Handle login authentication
    public function authenticate(Request $request): \Illuminate\Http\RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('errorMessage', 'Login failed. Please try again.');
    }

    // Show register form
    public function register()
    {
        return view('auth.register');
    }

    // Handle user registration
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed']
        ]);

        $validatedData['role_id'] = 2;
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('successMessage', 'Register successful! Please log in.');
    }

    // Handle user session logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }


    // Handle user change name

    public function changeProfile(){
        return view('auth.profile');
    }

    public function updateProfile(Request $request){
        $user = Auth::user();
        $user->name = $request['name'];
        $user->save();
        return back()->with('successMessage', 'Name changed successfully');
    }




    // Handle user change password
    public function changePassword()
    {
        return view('auth.password');
    }

    // Change password for Auth User
    public function updatePassword(Request $request)
    {
        if (!(Hash::check($request->get('old_password'), Auth::user()->password))) {
            return back()->with('errorMessage', 'Your current password does not match');
        }
        if (strcmp($request->get('old_password'), $request->get('new_password')) === 0) {
            return back()->with('errorMessage', 'Your current password cannot be same with the new password');
        }
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed'
        ]);
        $user = Auth::user();
        $user->password = bcrypt($request->get('new_password'));
        $user->save();
        return back()->with('successMessage', 'Password changed successfully');
    }
}
