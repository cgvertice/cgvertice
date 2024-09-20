<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyDescripcionNoticiaInConvergeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('converge', function (Blueprint $table) {
            $table->text('descripcion_noticia')->change(); // Cambia el tipo a TEXT
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('converge', function (Blueprint $table) {
            $table->string('descripcion_noticia', 255)->change(); // Revertir al tipo original si es necesario
        });
    }
}