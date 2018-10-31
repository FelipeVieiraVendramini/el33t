<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tournament extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournament', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('creator_id');
            $table->unsignedInteger('game_id');
            $table->unsignedInteger('platform');
            $table->string('email', 128);
            $table->string('phone', 24);
            $table->string('name', 32);
            $table->unsignedInteger('insc_start');
            $table->unsignedInteger('insc_end');
            $table->unsignedInteger('start_data');
            $table->text('about');
            $table->unsignedTinyInteger('prizes');
            $table->unsignedTinyInteger('paid');
            $table->text('rules');
            $table->unsignedTinyInteger('mode');
            $table->unsignedTinyInteger('type');
            $table->unsignedSmallInteger('team_amount');
            $table->unsignedSmallInteger('min_members');
            $table->unsignedSmallInteger('max_members');
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
        Schema::dropIfExists('tournament');
    }
}
