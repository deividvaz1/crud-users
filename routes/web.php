<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


Route::resource('usuarios', UsuarioController::class);
Route::get('', [SiteController::class, 'index'])->name('site.index');
