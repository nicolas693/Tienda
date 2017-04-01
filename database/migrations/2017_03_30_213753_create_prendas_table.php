<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Prenda', function (Blueprint $table) {
            $table->increments('Prenda_id');
            $table->string('marca',25);
            $table->string('talla',25);
            $table->string('color',40);
            $table->integer('estado');
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
        Schema::dropIfExists('Prenda');
    }
}
