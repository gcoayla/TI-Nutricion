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
        return Alimento::where("nombre","like","%".$parametro."%")
        ->orderBy("popularidad","desc")->take(5)->get("nombre");
    }

    function agregar_desayuno($nombre)
    {
        $alimento = Alimento::where("nombre",$parametro)->get();
        $consume = new usuario_consume;
        $consume->alimento_id=$alimento->id;
        $consume->tipo=1;

        $consume->save();
        return ("/");
    }
}
