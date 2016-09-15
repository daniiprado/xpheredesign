<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tbl_Tags', function (Blueprint $table) {
        //$table->engine = 'InnoDB'; Activar para MySQL
        $table->increments('tag_id')
              ->comment('Identificador del Tag del Blog');
        $table->integer('tag_blog_fk')
              ->unsigned()
              ->comment('Identificador del Blog');
        $table->string('tag_name', 60)
              ->comment('Descripción del Tag');
        $table->timestamps();
        // NOTE: Foreign Keys
        $table->foreign('tag_blog_fk')
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
        Schema::dropIfExists('tbl_Tags');
    }
}
