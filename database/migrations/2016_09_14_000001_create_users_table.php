<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_Users', function (Blueprint $table) {
            $table->increments('id')
                  ->comment('Identificador de Usuarios');
            $table->integer('user_type_fk')
                  ->unsigned()
                  ->comment('Identifica el Tipo de Usuario');
            $table->string('user_nickname', 80)
                  ->nullable()
                  ->comment('Nombre de usuario');
            $table->string('name', 80)
                  ->comment('Nombres del Usuario');
            $table->string('user_lastname', 80)
                  ->nullable()
                  ->comment('Apellidos del Usuario');
            $table->string('user_phone', 12)
                  ->nullable()
                  ->comment('Teléfono del Usuario');
            $table->string('email')
                  ->unique()
                  ->comment('Correo del Usuario');
            $table->string('user_web', 100)
                  ->nullable()
                  ->comment('Sitio Web');
            $table->string('password')
                  ->nullable()
                  ->comment('Contraseña del Usuario');
            $table->rememberToken()
                  ->comment('Token para procesar el Inicio de Sesión');
            $table->timestamps();
            $table->softDeletes();
            // NOTE: Foeirgn Keys
            $table->foreign('user_type_fk')
                  ->references('type_id')
                  ->on('tbl_Users_Types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_Users');
    }
}
