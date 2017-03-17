<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccion', function (Blueprint $table) {
            $table->increments('direccion_id');
            $table->integer('persona_id');
            $table->string('direccion_calle');
            $table->string('direccion_cp');
            $table->string('direccion_colonia');
            $table->string('direccion_municipio');
            $table->string('direccion_estado');
            $table->string('direccion_alias');
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
        Schema::dropIfExists('direccion');
    }
}
