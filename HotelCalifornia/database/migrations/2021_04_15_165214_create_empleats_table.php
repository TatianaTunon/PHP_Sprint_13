<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->string('DNI');
            $table->string('phone');
            
            $table->unsignedBigInteger('departament_id');
            $table->foreign('departament_id')->references('id')->on('departaments')->onDelete('cascade')->onUpdate('cascade');
            //no debería borrarse un departamento con personal contratado, hay forma de hacerlo? set null y poner nullable en unsignedBigInteger
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleats');
    }
}
