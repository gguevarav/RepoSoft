<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RegistroProgramas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas', function(Blueprint $table){
            $table->increments('id');
            $table->string('NombrePrograma');
            $table->string('UsuarioPrograma');
            $table->string('ClavePrograma');
            $table->string('PlataformaPrograma');
            $table->string('VersionPrograma');
            $table->string('LinkDescargaPrograma');
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
        Schema::dropIfExists('programas');
    }
}