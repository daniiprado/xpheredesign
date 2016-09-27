<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tbl_Profiles', function (Blueprint $table) {
          //$table->engine = 'InnoDB'; Activar para MySQL
          $table->increments('profile_id')
                ->comment('Identificador del Perfil');
          $table->integer('profile_user_id')
                ->unsigned()
                ->comment('Identificador del Usuario');
          $table->string('profile_pic', 255)
                ->nullable()
                ->comment('Dirección Imágen de Perfil del Usuario');
          $table->text('profile_description')
                ->nullable()
                ->comment('Texto que contiene descripción o breve biografía del usuario');
          $table->timestamps();
          // NOTE: Foreign Keys
          $table->foreign('profile_user_id')
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
          Schema::dropIfExists('tbl_Profiles');
    }
}
