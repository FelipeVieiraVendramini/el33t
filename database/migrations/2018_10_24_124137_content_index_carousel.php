<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContentIndexCarousel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('content_index_carousel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 64)->unique();
            $table->string('img_url', 128);
            $table->string('title', 128);
            $table->integer('title_color');
            $table->string('description', 256);
            $table->integer('description_color');
            $table->string('button', 24);
            $table->string('button_class', 32);
            $table->string('url', 512);
            $table->integer('order');
            $table->tinyInteger('flag');
            $table->unsignedInteger('timestamp');
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
        Schema::dropIfExists('content_index_carousel');
    }
}
