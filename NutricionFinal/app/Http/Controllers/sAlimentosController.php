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


    function search($parametro)
    {
        return Alimento::where("nombre","like","%".$parametro."%")->get("nombre");
    }
}
