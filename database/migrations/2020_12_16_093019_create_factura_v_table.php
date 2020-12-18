<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaVTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('numero');
            $table->unsignedBigInteger('cliente');
            $table->unsignedBigInteger('formaPago');
            $table->date('entrada');
            $table->date('salida');
            $table->double('total');
            $table->foreign('numero')->references('id')->on('habitacion')->onDelete('cascade'); 
            $table->foreign('cliente')->references('id')->on('client')->onDelete('cascade'); 
            $table->foreign('formaPago')->references('id')->on('formaPago')->onDelete('cascade'); 
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
        Schema::dropIfExists('factura_s');
    }
}
