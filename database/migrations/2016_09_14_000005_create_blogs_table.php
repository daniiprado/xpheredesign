<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tbl_Blogs', function (Blueprint $table) {
        //$table->engine = 'InnoDB'; Activar para MySQL
        $table->increments('blog_id')
              ->comment('Identificador del Blog');
        $table->integer('blog_user_fk')
              ->unsigned()
              ->comment('Identifica al Usuario al que pertenece el Blog');
        $table->integer('blog_category_fk')
              ->unsigned()
              ->comment('Identificador de la categoría del Blog');
        $table->integer('blog_privacy_fk')
              ->unsigned()
              ->comment('Identificador de la privacidad del Blog');
        $table->integer('blog_states_fk')
              ->unsigned()
              ->comment('Identificador de estado del Blog');
        $table->string('blog_title', 600)
              ->comment('Título del Blog');
        $table->longText('blog_content')
              ->comment('Texto que contiene el Blog');
        $table->timestamps();
        // NOTE: Foreign Keys
        $table->foreign('blog_user_fk')
              ->references('id')
              ->on('tbl_Users');
        $table->foreign('blog_category_fk')
              ->references('category_id')
              ->on('tbl_Categories');
        $table->foreign('blog_privacy_fk')
              ->references('privacy_id')
              ->on('tbl_Privacy');
        $table->foreign('blog_states_fk')
              ->references('state_id')
              ->on('tbl_States');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_Blogs');
    }
}
