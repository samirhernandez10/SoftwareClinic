<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Trait para manejar la autenticación
    use AuthenticatesUsers;

    // Redirige a la vista de inicio después de iniciar sesión
    protected $redirectTo = '/home';

    // Constructor para proteger las rutas
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Sobreescribe el método showLoginForm para mostrar la vista del formulario de inicio de sesión
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Sobreescribe el método logout para manejar el cierre de sesión
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
