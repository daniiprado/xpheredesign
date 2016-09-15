<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_Permissions', function (Blueprint $table) {
          //$table->engine = 'InnoDB'; Activar para MySQL
          $table->increments('permission_id')
                ->comment('Identificador del permiso');
          $table->string('permission_name', 80)
                ->comment('Nombre del permiso');
          $table->boolean('permission_value')
                ->comment('Valor binario del permiso');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('tbl_Permissions');
    }
}
