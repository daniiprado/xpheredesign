<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivacyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tbl_Privacy', function (Blueprint $table) {
          //$table->engine = 'InnoDB'; Activar para MySQL
          $table->increments('privacy_id')
                ->comment('Identificador de la Privacidad del Blog');
          $table->string('privacy_name', 60)
                ->comment('Descripción de la Privacidad');
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
        Schema::dropIfExists('tbl_Privacy');
    }
}
