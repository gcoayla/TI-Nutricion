<?php

namespace Database\Seeders;

use App\Models\Receta;
use Illuminate\Database\Seeder;

class RecetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $receta1 = new Receta;
        $receta1->nombre = "Arroz con pollo";
        $receta1->save();

        $receta2 = new Receta;
        $receta2->nombre = "Pescado frito";
        $receta2->save();

        $receta3 = new Receta;
        $receta3->nombre = "Rocoto relleno";
        $receta3->save();
    }
}
