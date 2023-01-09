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
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 100);
            $table->string('ap', 100);
            $table->string('am', 100);
            $table->string('direccion', 200);
            $table->string('entrecalle', 200);
            $table->string('entrecalles', 200);
            $table->string('nex', 10);
            $table->string('nint', 10);
            $table->string('referencia', 200);
            $table->integer('tel');
            $table->integer('cel');
            $table->string('correo', 50);
            $table->unsignedbigInteger('paquete_id');
            $table->foreign('paquete_id')
            ->references('id')
            ->on('paquetes')
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
        Schema::dropIfExists('clientes');
    }
};
