<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignacaracteristicas', function (Blueprint $table) {
            $table->bigIncrements('id');
            //paquetes
            $table->unsignedBigInteger('servicio_id');
            $table->foreign('servicio_id')
            ->references('id')
            ->on('servicios')
            ->onUpdate('cascade')
            ->onDelete("cascade");
            //servicios
            $table->unsignedbigInteger('caracteristica_id');
            $table->foreign('caracteristica_id')
            ->references('id')
            ->on('caracteristicas')
            ->onUpdate('cascade')
            ->onDelete("cascade");
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asignacaracteristicas');
    }
};
