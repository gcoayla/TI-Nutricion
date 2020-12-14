<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alimentos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->integer('calorias');
            $table->string('tipo', 50);
            $table->integer('popularidad');
            $table->decimal('proteinas', 5, 2);
            $table->decimal('carbohidratos', 5, 2);
            $table->decimal('grasas', 5, 2);
            /*$table->decimal('azucares', 5, 2);
            $table->decimal('almidones', 5, 2);
            $table->decimal('fibra', 5, 2);
            $table->decimal('grasas_saturadas', 5, 2);
            $table->decimal('grasas_trans', 5, 2);
            $table->decimal('grasas_insaturadas', 5, 2);
            $table->decimal('calcio', 5, 2);
            $table->decimal('zinc', 5, 2);
            $table->decimal('hierro', 5, 2);
            $table->decimal('magnesio', 5, 2);
            $table->decimal('potasio', 5, 2);
            $table->decimal('vitaminaA', 5, 2);
            $table->decimal('vitaminaC', 5, 2);
            $table->decimal('vitaminaD', 5, 2);
            $table->decimal('vitaminaE', 5, 2);
            $table->decimal('vitaminaK', 5, 2);*/
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alimentos');
    }
}
