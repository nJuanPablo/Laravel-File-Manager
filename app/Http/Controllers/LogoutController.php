<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();
        return redirect('/login')->with('message', 'Logged out successfully');
    }
}
