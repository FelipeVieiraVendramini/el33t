<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 32)->unique();
            $table->string('email', 128)->unique();
            $table->string('password', 128);
            $table->unsignedInteger('type');
            $table->unsignedTinyInteger('flag');
            $table->unsignedTinyInteger('lock');
            $table->string('hash');
            $table->string('security_question');
            $table->string('security_answer');
            $table->rememberToken();
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
        Schema::dropIfExists('accounts');
    }
}
