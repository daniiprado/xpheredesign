<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tbl_Images', function (Blueprint $table) {
        //$table->engine = 'InnoDB'; Activar para MySQL
        $table->increments('image_id')
              ->comment('Identificador de la Imágen');
        $table->integer('image_blog_fk')
              ->unsigned()
              ->comment('Identificador del Blog');
        $table->string('image_url', 255)
              ->comment('Dirección física de la imágen');
        $table->timestamps();
        // NOTE: Foreign Keys
        $table->foreign('image_blog_fk')
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
        Schema::dropIfExists('tbl_Images');
    }
}
