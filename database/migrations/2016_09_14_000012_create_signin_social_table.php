<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSigninSocialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_Signin_Social', function (Blueprint $table) {
          //$table->engine = 'InnoDB'; Activar para MySQL
          $table->increments('network_id')
                ->comment('Identificador de la red social');
          $table->bigInteger('network_user_id')
                ->comment('Identificador recibido de la red social');
          $table->string('network_name', 30)
                ->comment('Nombre de la Red Social');
          $table->integer('network_user_fk')
                ->comment('Usuario asociado');
          $table->timestamps();
          // NOTE: Foreign Keys
          $table->foreign('network_user_fk')
                ->references('id')
                ->on('tbl_Users');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('tbl_Signin_Social');
    }
}
