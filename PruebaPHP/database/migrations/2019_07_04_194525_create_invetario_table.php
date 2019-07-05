<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvetarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invetario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_producto');
            $table->Integer('cantidad');
            $table->string('codigo_lote');
            $table->date('fecha_de_vencimiento');
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
        Schema::dropIfExists('invetario');
    }
}
