<?php

namespace App\Http\Controllers;

use App\Models\consumer;
use App\Models\Alimento;

use Illuminate\Http\Request;

class ConsumerController extends Controller
{
    //
    function agregar_desayuno($nombre)
    {
        $alimento = Alimento::where("nombre",$parametro)->get();
        $consume = new usuario_consume;
        $consume->alimento_id=$alimento->id;
        $consume->tipo=1;

        $consume->save();
        return ("/");
    }





    function getDesayuno()
    {//
        //$id1=consumer::where("tipo",1)->get("alimento_id"); // id alimentos es la foreing key

        $id1=consumer::find(1);
        //return $id1;
        //extraer cada id y retornarlo
        foreach($id1->Alimento->id as $al){
            echo $al->nombre;

        }

        return Alimento::where("id",1)->get("nombre");
    }

    function getAlmuerzo()
    {//

    }

    function getCena()
    {//

    }

    function getAperitivos()
    {//

    }

    function getCalorias()
    {//

    }

    function getProteinas()
    {

    }

    function getCarbohidratos()
    {

    }

    function getGrasas()
    {

    }
}
