<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\User;
use App\Models\Solicitud;
use \stdClass;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Método para procesar el inicio de sesión
    public function login(Request $request)
    {
        $credencials = [
            "email" => $request->email,
            "password" => $request->password
        ];

        if(Auth::attempt($credencials)){
            
            $request->session()->regenerate();

            return redirect()->route('dashboard.show');

        }else{
            return back()->withErrors([
                'email' => 'Las credenciales no son correctas.',
            ]);
        }
    }

    // Método para cerrar sesión
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
