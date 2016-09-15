<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_Modules', function (Blueprint $table) {
          //$table->engine = 'InnoDB'; Activar para MySQL
          $table->increments('module_id')
                ->comment('Identificador del módulo');
          $table->string('module_name', 80)
                ->comment('Nombre del módulo');
          $table->integer('module_user_type_fk')
                ->comment('Identificador del tipo de usuario');
          $table->integer('module_permission_fk')
                ->comment('Identificador del tipo de permiso');
          $table->timestamps();
          // NOTE: Foreign Keys
          $table->foreign('module_user_type_fk')
                ->references('type_id')
                ->on('tbl_Users_Types');
          $table->foreign('module_permission_fk')
                ->references('permission_id')
                ->on('tbl_Permissions');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('tbl_Modules');
    }
}
