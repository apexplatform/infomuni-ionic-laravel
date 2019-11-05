<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Denuncia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('denuncia', function (Blueprint $table) {
       $table->Increments('id');
       $table->string('imagen');
       $table->longtext('descripcion');
       $table->integer('users_id')->unsigned();
       $table->integer('tipo_id')->unsigned();
       $table->timestamps();

       $table->foreign('users_id')->references('id')->on('users')
             ->onDelete('cascade')
             ->onDelete('cascade')
             ->onUpdate('cascade');

             $table->foreign('tipo_id')->references('id')->on('tipo')
                   ->onDelete('cascade')
                   ->onDelete('cascade')
                   ->onUpdate('cascade');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('denuncia');
    }
}
