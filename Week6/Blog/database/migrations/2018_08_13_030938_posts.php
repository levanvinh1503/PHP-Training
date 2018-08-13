<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('post_id');
            $table->integer('categories_id_fkey')->unsigned();
            $table->string('post_title');
            $table->string('post_description');
            $table->string('post_content');
            $table->string('post_image');
            $table->integer('post_view');
            $table->string('post_status');
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
        //
    }
}
