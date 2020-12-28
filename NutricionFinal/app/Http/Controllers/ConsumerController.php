<?php

namespace App\Http\Controllers;

use App\Models\consumer;
use App\Models\User;
use App\Models\Alimento;

use Illuminate\Http\Request;

class ConsumerController extends Controller
{
    //
    function agregar_desayuno(Request $nombre)
    {
        /*$alimento = Alimento::where("nombre",$nombre)->get("id");
        $resultado = json_decode($alimento);*/

        $consume = new consumer;
        $consume->alimento_id=$nombre->alinit;
        $consume->usuario_id=1;
        $consume->cantidad=$nombre->gramos;
        $consume->tipo=$nombre->tipocomida;

        $consume->save();
        return redirect("/");
    }
   /* function agregar_almuerzo(Request $nombre)
    {
        $consume = new consumer;
        $consume->alimento_id=$nombre->alinit;
        $consume->usuario_id=1;
        $consume->cantidad=$nombre->gramos;
        $consume->tipo=$nombre->tipocomida;

        $consume->save();
        return redirect("/");
    }
    }
    function agregar_cena(Request $nombre)
    {
        $consume = new consumer;
        $consume->alimento_id=$nombre->alinit;
        $consume->usuario_id=1;
        $consume->cantidad=$nombre->gramos;
        $consume->tipo=$nombre->tipocomida;

        $consume->save();
        return redirect("/");
    }
    }
    function agregar_aperitivo(Request $nombre)
    {
        $consume = new consumer;
        $consume->alimento_id=$nombre->alinit;
        $consume->usuario_id=1;
        $consume->cantidad=$nombre->gramos;
        $consume->tipo=$nombre->tipocomida;

        $consume->save();
        return redirect("/");
    }

*/
    function getDesayuno()
    {//
        $cons=consumer::where("tipo",1)->get("alimento_id");

        $resultado = json_decode($cons);

        $aliment=[];//->nombres de alimentos, se van a imprimir
        $i=0;
        while($i<count($cons))
        {
            $aliment[$i]=Alimento::where("id",$resultado[$i]->alimento_id)->get("nombre");//->first();//->nombre;//get("nombre");
            $i=$i+1;
        }

        return $aliment;
    }

    function getAlmuerzo()
    {//
        $cons=consumer::where("tipo",2)->get("alimento_id");

        $resultado = json_decode($cons);

        $aliment=[];//->nombres de alimentos, se van a imprimir
        $i=0;
        while($i<count($cons))
        {
            $aliment[$i]=Alimento::where("id",$resultado[$i]->alimento_id)->get("nombre");//->first();//->nombre;//get("nombre");
            $i=$i+1;
        }

        return $aliment;
    }

    function getCena()
    {//
        $cons=consumer::where("tipo",3)->get("alimento_id");

        $resultado = json_decode($cons);

        $aliment=[];//->nombres de alimentos, se van a imprimir
        $i=0;
        while($i<count($cons))
        {
            $aliment[$i]=Alimento::where("id",$resultado[$i]->alimento_id)->get("nombre");//->first();//->nombre;//get("nombre");
            $i=$i+1;
        }

        return $aliment;
    }

    function getAperitivos()
    {//
        $cons=consumer::where("tipo",4)->get("alimento_id");

        $resultado = json_decode($cons);

        $aliment=[];//->nombres de alimentos, se van a imprimir
        $i=0;
        while($i<count($cons))
        {
            $aliment[$i]=Alimento::where("id",$resultado[$i]->alimento_id)->get("nombre");//->first();//->nombre;//get("nombre");
            $i=$i+1;
        }

        return $aliment;
    }

    function getCalorias()
    {//
        $cons=consumer::all("alimento_id");
        $resultado = json_decode($cons);

        $caloria=[];
        $i=0;
        while($i<count($cons))
        {
            $caloria[$i]=Alimento::where("id",$resultado[$i]->alimento_id)->get("calorias");
            $i=$i+1;
        }

        //return $caloria;
      //  $resultado2 = json_decode($caloria);


        $j=0;
        $i=0;
        while($j<count($caloria))
        {
            $resultado2 = json_decode($caloria[$j]);



            $i=$i+$resultado2;//[$j]->calorias;
            $j=$j+1;
        }

        return $i;
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

//get("alimento_id"); // id alimentos es la foreing key
        //$al=Alimento::where("id",$cons)->get("nombre");

        //$id1=consumer::find(1);
        //return $id1;
        //extraer cada id y retornarlo
        /*foreach($cons->Alimento as $al){
            echo $al->pivot->nombre;

        }*/
        /*$user = User::find(2)->alimento()->get();
        return $user;//->alimento();*/
        //return $al;
/*


//return Alimento::where("id",intval(array($cons[1])))->get("nombre");

*/

