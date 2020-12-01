<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index() {
        /*$usuarios = DB::table('usuarios')->get();
        return view('usuarios/index', ['usuarios' => $usuarios]);*/
        return view('usuarios/index');
    }
}
