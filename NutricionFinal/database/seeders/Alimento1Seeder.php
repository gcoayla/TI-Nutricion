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
        $aliment1->nombre = "semola";
        $aliment1->calorias = "5";
        $aliment1->tipo = "vegetal";
        $aliment1->popularidad = "3";
        $aliment1->proteinas = "0.2";
        $aliment1->carbohidratos = "0.2";
        $aliment1->grasas = "0.2";

        $aliment1->save();
    }
}
