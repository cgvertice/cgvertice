<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('converge', function (Blueprint $table) {
            $table->string('author')->after('descripcion_noticia'); // Campo Autor
            $table->string('url')->nullable()->after('author'); // Campo URL opcional
        });
    }
    
    public function down()
    {
        Schema::table('converge', function (Blueprint $table) {
            $table->dropColumn(['author', 'url']);
        });
    }
    
};