<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistroRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return redirect('/home')->with('success', 'Usuario autenticado correctamente');
        }
        return view('auth.registro');
    }

    public function registro(RegistroRequest $request){
        $user = User::create($request->validated()); // llama a las reglas de validacion
        return redirect('/login')->with('success', 'Usuario registrado correctamente');
    }
}
