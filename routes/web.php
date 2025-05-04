<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

// rotas para direcionar o usuário para a raiz do projeto
Route::redirect('/', '/usuarios');
Route::resource('usuarios', UsuarioController::class);
