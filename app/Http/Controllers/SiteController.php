<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
//controller pra redirecionar o usuário corretamente
class SiteController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        //especificando a view home
        return view('site.home', compact('usuarios'));
    }

    public function details($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('site.details', compact('usuario'));
    }
}
