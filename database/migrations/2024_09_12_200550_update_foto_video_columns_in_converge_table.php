<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFotoVideoColumnsInConvergeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('converge', function (Blueprint $table) {
            // Cambiar el tipo de datos de BLOB a VARCHAR(255) o TEXT
            $table->string('foto', 255)->nullable()->change();
            $table->string('video', 255)->nullable()->change();
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
            // Volver a cambiar los campos a BLOB si es necesario
            $table->binary('foto')->nullable()->change();
            $table->binary('video')->nullable()->change();
        });
    }
}