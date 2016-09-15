<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_States', function (Blueprint $table) {
            //$table->engine = 'InnoDB'; Activar para MySQL
            $table->increments('state_id')
                  ->comment('Identificador del Estado');
            $table->string('state_name', 20)
                  ->comment('Nombre del Estado');
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
      Schema::dropIfExists('tbl_States');
    }
}
