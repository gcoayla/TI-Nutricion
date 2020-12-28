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
        $consume->alimento_id=$nombre->alimid;
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

    function getValores()
    {//
        $cons=consumer::all();

        $calorias=0;
        $proteinas=0;
        $carbohidratos=0;
        $grasas=0;

        $resultado = json_decode($cons);

        $i=0;
        while($i<count($cons))
        {
            $alimento=Alimento::where("id",$resultado[$i]->alimento_id)->get();
            $resultado_alimen = json_decode($alimento);
            $cantidad= $resultado[$i]->cantidad;

            $calorias_1=$resultado_alimen[0]->calorias;
            $calorias_1=(int) $calorias_1;

            $proteinas_1=$resultado_alimen[0]->proteinas;
            $proteinas_1=(int) $proteinas_1;

            $carbohidratos_1=$resultado_alimen[0]->carbohidratos;
            $carbohidratos_1=(int)$carbohidratos;

            $grasas_1=$resultado_alimen[0]->grasas;
            $grasas_1=(int) $grasas_1;

            $cantidad=(int)$cantidad;

            $calorias=$calorias + ($calorias_1*$cantidad);
            $proteinas=$proteinas + ($proteinas_1*$cantidad);
            $carbohidratos=$carbohidratos + ($carbohidratos_1*$cantidad);
            $grasas=$grasas + ($grasas_1*$cantidad);




            $i=$i+1;
        }

       /* $object->calo=$calorias;
        $object->prot=$proteinas;
        $object->carboh=$carbohidratos;
        $object->gras=$grasas;

        $TJOSN = json_encode($object);*/

        $val=array($calorias,$proteinas,$carbohidratos,$grasas);

        $TsJOSN = json_encode($val);

        return $TsJOSN;
    }
}
    /*function getProteinas()
    {

    }

    function getCarbohidratos()
    {

    }

    function getGrasas()
    {

    }
}*/

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

