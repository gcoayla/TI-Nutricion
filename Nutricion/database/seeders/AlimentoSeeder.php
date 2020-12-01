<?php

namespace Database\Seeders;

use App\Models\Alimento;
use Illuminate\Database\Seeder;

class AlimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alimento1 = new Alimento;
        $alimento1->nombre = "Manzana";
        $alimento1->calorias = 52;
        $alimento1->tipo = "Fruta";
        $alimento1->popularidad = 0;
        $alimento1->proteinas = 0.3;
        $alimento1->azucares = 10;
        $alimento1->almidones = 12;
        $alimento1->fibra = 4.5;
        $alimento1->grasas_saturadas = 0;
        $alimento1->grasas_trans = 0;
        $alimento1->grasas_insaturadas = 0.3;
        $alimento1->calcio = 6;
        $alimento1->zinc = 0;
        $alimento1->hierro = 0.1;
        $alimento1->magnesio = 5;
        $alimento1->potasio = 107;
        $alimento1->vitaminaA = 54;
        $alimento1->vitaminaC = 4.6;
        $alimento1->vitaminaD = 0;
        $alimento1->vitaminaE = 0;
        $alimento1->vitaminaK = 5;

        $alimento1->save();

        $alimento2 = new Alimento;
        $alimento2->nombre = "Huevo hervido";
        $alimento2->calorias = 155;
        $alimento2->tipo = "Subproducto avícola";
        $alimento2->popularidad = 0;
        $alimento2->proteinas = 13;
        $alimento2->azucares = 1.1;
        $alimento2->almidones = 0.3;
        $alimento2->fibra = 0;
        $alimento2->grasas_saturadas = 2.41;
        $alimento2->grasas_trans = 10.5;
        $alimento2->grasas_insaturadas = 2.4;
        $alimento2->calcio = 50;
        $alimento2->zinc = 0.5;
        $alimento2->hierro = 1.2;
        $alimento2->magnesio = 10;
        $alimento2->potasio = 126;
        $alimento2->vitaminaA = 520;
        $alimento2->vitaminaC = 0;
        $alimento2->vitaminaD = 87;
        $alimento2->vitaminaE = 0;
        $alimento2->vitaminaK = 0;

        $alimento2->save();

        $alimento3 = new Alimento;
        $alimento3->nombre = "Queso";
        $alimento3->calorias = 402;
        $alimento3->tipo = "Lácteo";
        $alimento3->popularidad = 0;
        $alimento3->proteinas = 25;
        $alimento3->azucares = 0.5;
        $alimento3->almidones = 1.3;
        $alimento3->fibra = 0;
        $alimento3->grasas_saturadas = 21;
        $alimento3->grasas_trans = 1.1;
        $alimento3->grasas_insaturadas = 0;
        $alimento3->calcio = 721;
        $alimento3->zinc = 4;
        $alimento3->hierro = 0.7;
        $alimento3->magnesio = 28;
        $alimento3->potasio = 98;
        $alimento3->vitaminaA = 1002;
        $alimento3->vitaminaC = 0;
        $alimento3->vitaminaD = 24;
        $alimento3->vitaminaE = 0.25;
        $alimento3->vitaminaK = 45;

        $alimento3->save();
    }
}
