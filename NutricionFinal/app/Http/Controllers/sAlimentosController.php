<?php

namespace App\Http\Controllers;

use App\Models\Alimento;
use Illuminate\Http\Request;

class sAlimentosController extends Controller
{
    //
    function lista()
    {
         return Alimento::all();
    }
}
