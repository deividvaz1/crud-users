<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

//rota de usuários do controller e página inicial
Route::resource('usuarios', UsuarioController::class);
Route::get('', [SiteController::class, 'index'])->name('site.index');
//rota para ver um usuário por id
Route::get('usuario/{id}', [SiteController::class, 'details'])->name('site.details');
