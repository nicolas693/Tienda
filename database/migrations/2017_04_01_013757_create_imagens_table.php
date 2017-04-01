<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Imagen', function (Blueprint $table) {
            $table->increments('Imagen_id');
            $table->integer('Prenda_id')->unsigned();
            $table->string('imagen1',100)->nullable();
            $table->string('imagen2',100)->nullable();
            $table->string('imagen3',100)->nullable();
            $table->string('imagen4',100)->nullable();
            $table->string('imagen5',100)->nullable();
            $table->string('imagen6',100)->nullable();
            $table->string('imagen7',100)->nullable();
            $table->timestamps();

            $table->foreign('Prenda_id')->references('Prenda_id')->on('Prenda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Imagen');
    }
}
