<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->string('slug');
            $table->text('isi_post');
            $table->integer('kategori_id')->nulabble()->unsigned();
            $table->foreign('kategori_id')->references('id')->on('kategoris');
            $table->string('image_post');
            $table->integer('tag_id')->nullable()->unsigned();
            $table->foreign('tag_id')->references('id')->on('tags');


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
        Schema::dropIfExists('posts');
    }
}
