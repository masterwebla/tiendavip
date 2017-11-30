<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdenesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero');
            $table->decimal('subtotal',8,2);
            $table->decimal('envio',8,2);
            $table->date('fecha');
            $table->integer('iduser')->unsigned();
            $table->foreign('iduser')->references('id')->on('users');
            $table->integer('idestado')->unsigned();
            $table->foreign('idestado')->references('id')->on('estados_orden');
            $table->integer('idmetodo')->unsigned();
            $table->foreign('idmetodo')->references('id')->on('metodospago');
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
        Schema::dropIfExists('ordenes');
    }
}
