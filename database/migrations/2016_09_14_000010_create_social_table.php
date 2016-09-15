<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tbl_Social', function (Blueprint $table) {
        //$table->engine = 'InnoDB'; Activar para MySQL
        $table->increments('social_id')
              ->comment('Identificador de Social');
        $table->integer('social_blog_fk')
              ->unsigned()
              ->comment('Identificador del blog');
        $table->string('social_name', 80)
              ->comment('Descripción de la Red Social');
        $table->string('social_url')
              ->comment('Url de la Red Social Compartida');
        $table->timestamps();
        // NOTE: Foreign Keys
        $table->foreign('social_blog_fk')
              ->references('blog_id')
              ->on('tbl_Blogs');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_Social');
    }
}
