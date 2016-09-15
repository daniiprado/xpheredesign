<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tbl_Categories', function (Blueprint $table) {
          //$table->engine = 'InnoDB'; Activar para MySQL
          $table->increments('category_id')
                ->comment('Identificador de la Categoría');
          $table->string('category_name', 100)
                ->comment('Descripción de la Categoría del Blog');
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
        Schema::dropIfExists('tbl_Categories');
    }
}
