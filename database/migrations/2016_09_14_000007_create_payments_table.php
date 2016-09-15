<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tbl_Payments', function (Blueprint $table) {
        //$table->engine = 'InnoDB'; Activar para MySQL
        $table->increments('pay_id')
              ->comment('Identificador del Pago');
        $table->integer('pay_user_fk')
              ->unsigned()
              ->comment('Identifica del Usuario');
        $table->string('pay_name', 80)
              ->comment('Descripción del Pago');
        $table->timestamps();
        // NOTE: Foreign Keys
        $table->foreign('pay_user_fk')
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
        Schema::dropIfExists('tbl_Payments');
    }
}
