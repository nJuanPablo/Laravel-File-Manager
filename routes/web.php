<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\EditController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/registro', [RegistroController::class, 'index']);
route::post('/registro', [RegistroController::class, 'registro']);
route::get('/login', [LoginController::class, 'index']);
route::post('/login', [LoginController::class, 'login']);
route::get('/logout', [LogoutController::class, 'logout']);
route::get('/home', [HomeController::class, 'index']);
route::post('/home', [HomeController::class, 'store']);
route::delete('/folder/{id}', [FolderController::class, 'destroy']);
route::post('/folder/{id}', [FolderController::class, 'store']);
route::get('/folder/{id}', [FolderController::class, 'index']);
route::get('/editar/{id}', [EditController::class, 'index']);
route::patch('/editar/{id}', [EditController::class, 'update']);

