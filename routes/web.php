<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

//rota de usuários do controller e página inicial
Route::resource('usuarios', UsuarioController::class);
Route::get('', [SiteController::class, 'index'])->name('site.index');
//rota para ver um usuário por id
Route::get('usuario/{id}', [SiteController::class, 'details'])->name('site.details');
//rota para criar um usuario
Route::post('usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
//rota para excluir um usuario
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');
