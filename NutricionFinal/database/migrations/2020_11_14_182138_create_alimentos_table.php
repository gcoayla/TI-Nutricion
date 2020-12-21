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
            $table->decimal('proteinas', 6, 2);
            $table->decimal('carbohidratos', 6, 2);
            $table->decimal('grasas', 6, 2);
            /*$table->decimal('azucares', 6, 2);
            $table->decimal('almidones', 6, 2);
            $table->decimal('fibra', 6, 2);
            $table->decimal('grasas_saturadas', 6, 2);
            $table->decimal('grasas_trans', 6, 2);
            $table->decimal('grasas_insaturadas', 6, 2);
            $table->decimal('calcio', 6, 2);
            $table->decimal('zinc', 6, 2);
            $table->decimal('hierro', 6, 2);
            $table->decimal('magnesio', 6, 2);
            $table->decimal('potasio', 6, 2);
            $table->decimal('vitaminaA', 6, 2);
            $table->decimal('vitaminaC', 6, 2);
            $table->decimal('vitaminaD', 6, 2);
            $table->decimal('vitaminaE', 6, 2);
            $table->decimal('vitaminaK', 6, 2);*/
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
