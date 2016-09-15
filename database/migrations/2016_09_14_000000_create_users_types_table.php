<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tbl_Users_Types', function (Blueprint $table) {
        //$table->engine = 'InnoDB'; Activar para MySQL
        $table->increments('type_id')
              ->comment('Identificador del Tipo de Usuario');
        $table->string('type_name', 60)
              ->comment('Descripción del tipo de usuario');
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
        Schema::dropIfExists('tbl_Users_Types');
    }
}
