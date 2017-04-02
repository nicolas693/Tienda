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
            $table->string('imagen',100)->nullable();
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
