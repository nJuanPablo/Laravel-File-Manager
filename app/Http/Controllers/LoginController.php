<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return redirect('/home')->with('success', 'Usuario autenticado correctamente');
        }
        return view('auth.login');
    }

    public function login(LoginRequest $request){
        $credenciales = $request->validated(); // Llama a las reglas de validacion
        if(!Auth::validate($credenciales)){
            return redirect()->to('/login')->withErrors('Credenciales incorrectas');
        }
        $user = Auth::getProvider()->retrieveByCredentials($credenciales); // Crea el usuario
        Auth::login($user); 
        return $this->authenticated($request, $user); // Envia un objeto indicando que el usuario fue autenticado
    }

    public function authenticated(Request $request, $user)
    {
        return redirect()->to('/home')->with('success', 'Usuario autenticado correctamente');
    }
}
