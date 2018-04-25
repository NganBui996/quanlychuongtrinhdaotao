<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSinhViensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinh_viens', function (Blueprint $table) {
            $table->increments('sv_id');
            $table->timestamps();
            $table->string('username');
            $table->string('password');
            $table->rememberToken();
            $table->string('email')->unique();
            $table->string('sv_name');
            $table->string('diachi_sv');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sinh_viens');
    }
}
