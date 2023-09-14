<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // El usuario ha iniciado sesión correctamente
            return redirect()->intended('/inicio');
        } else {
            // Las credenciales no son válidas
            return back()->withErrors([
                'email' => 'Las credenciales no son válidas.',
            ]);
        }
    }
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $validatedData['password'] = bcrypt($request->password);

        $user = User::create($validatedData);

        Auth::login($user);

        return redirect('/inicio');
    }
    public function logout()
    {
        Auth::logout();

        return redirect('/inicio');

    }
}