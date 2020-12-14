<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComposicionRecetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('composicion_receta', function (Blueprint $table) {
            $table->foreignId('receta_id')->references('id')->on('receta')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreignId('alimento_id')->references('id')->on('alimentos')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->integer('cantidad');
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
        Schema::dropIfExists('composicion_receta');
    }
}
