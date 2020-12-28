<?php

namespace Database\Seeders;

use App\Models\Alimento;
use Illuminate\Database\Seeder;

class Alimento1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aliment = new Alimento();
        $aliment->nombre = "calabaza";
        $aliment->calorias = "10";
        $aliment->tipo = "vegetal";
        $aliment->popularidad = "0";
        $aliment->proteinas = "0.1";
        $aliment->carbohidratos = "0.1";
        $aliment->grasas = "0.1";

        $aliment->save();

        $aliment1 = new Alimento();
        $aliment1->nombre = "naranja";
        $aliment1->calorias = "5";
        $aliment1->tipo = "vegetal";
        $aliment1->popularidad = "3";
        $aliment1->proteinas = "0.2";
        $aliment1->carbohidratos = "0.2";
        $aliment1->grasas = "0.2";

        $aliment1->save();

        $aliment2 = new Alimento();
        $aliment2->nombre = "fresa";
        $aliment2->calorias = "10";
        $aliment2->tipo = "vegetal";
        $aliment2->popularidad = "0";
        $aliment2->proteinas = "0.1";
        $aliment2->carbohidratos = "0.1";
        $aliment2->grasas = "0.1";

        $aliment2->save();

        $aliment3 = new Alimento();
        $aliment3->nombre = "papaya";
        $aliment3->calorias = "5";
        $aliment3->tipo = "vegetal";
        $aliment3->popularidad = "3";
        $aliment3->proteinas = "0.2";
        $aliment3->carbohidratos = "0.2";
        $aliment3->grasas = "0.2";

        $aliment3->save();

        $aliment4 = new Alimento();
        $aliment4->nombre = "maracuya";
        $aliment4->calorias = "10";
        $aliment4->tipo = "vegetal";
        $aliment4->popularidad = "0";
        $aliment4->proteinas = "0.1";
        $aliment4->carbohidratos = "0.1";
        $aliment4->grasas = "0.1";

        $aliment4->save();

        $aliment5 = new Alimento();
        $aliment5->nombre = "durazno";
        $aliment5->calorias = "5";
        $aliment5->tipo = "vegetal";
        $aliment5->popularidad = "3";
        $aliment5->proteinas = "0.2";
        $aliment5->carbohidratos = "0.2";
        $aliment5->grasas = "0.2";

        $aliment5->save();

        $aliment6 = new Alimento();
        $aliment6->nombre = "platano";
        $aliment6->calorias = "10";
        $aliment6->tipo = "vegetal";
        $aliment6->popularidad = "0";
        $aliment6->proteinas = "0.1";
        $aliment6->carbohidratos = "0.1";
        $aliment6->grasas = "0.1";

        $aliment6->save();

        $aliment7 = new Alimento();
        $aliment7->nombre = "granadilla";
        $aliment7->calorias = "5";
        $aliment7->tipo = "vegetal";
        $aliment7->popularidad = "3";
        $aliment7->proteinas = "0.2";
        $aliment7->carbohidratos = "0.2";
        $aliment7->grasas = "0.2";

        $aliment7->save();

        $aliment8 = new Alimento();
        $aliment8->nombre = "tomate";
        $aliment8->calorias = "10";
        $aliment8->tipo = "vegetal";
        $aliment8->popularidad = "0";
        $aliment8->proteinas = "0.1";
        $aliment8->carbohidratos = "0.1";
        $aliment8->grasas = "0.1";

        $aliment8->save();

        $aliment9 = new Alimento();
        $aliment9->nombre = "cebolla";
        $aliment9->calorias = "5";
        $aliment9->tipo = "vegetal";
        $aliment9->popularidad = "3";
        $aliment9->proteinas = "0.2";
        $aliment9->carbohidratos = "0.2";
        $aliment9->grasas = "0.2";

        $aliment9->save();

        $aliment10 = new Alimento();
        $aliment10->nombre = "kiwi";
        $aliment10->calorias = "10";
        $aliment10->tipo = "vegetal";
        $aliment10->popularidad = "0";
        $aliment10->proteinas = "0.1";
        $aliment10->carbohidratos = "0.1";
        $aliment10->grasas = "0.1";

        $aliment10->save();

        $aliment11 = new Alimento();
        $aliment11->nombre = "semola";
        $aliment11->calorias = "5";
        $aliment11->tipo = "vegetal";
        $aliment11->popularidad = "3";
        $aliment11->proteinas = "0.2";
        $aliment11->carbohidratos = "0.2";
        $aliment11->grasas = "0.2";

        $aliment11->save();

    }
}
