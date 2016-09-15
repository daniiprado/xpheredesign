<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tbl_Comments', function (Blueprint $table) {
        //$table->engine = 'InnoDB'; Activar para MySQL
        $table->increments('comment_id')
              ->comment('Identificador del Comentario');
        $table->integer('comment_blog_fk')
              ->unsigned()
              ->comment('Identificador del Blog');
        $table->integer('comment_user_id')
              ->unsigned()
              ->comment('Usuario que realizó el comentario');
        $table->string('comment_text', 255)
              ->comment('Texto del comentario');
        $table->timestamps();
        // NOTE: Foreign Keys
        $table->foreign('comment_blog_fk')
              ->references('blog_id')
              ->on('tbl_Blogs');
        $table->foreign('comment_user_id')
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
          Schema::dropIfExists('tbl_Comments');
    }
}
