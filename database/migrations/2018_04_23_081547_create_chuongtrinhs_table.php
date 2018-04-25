<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChuongtrinhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuongtrinhs', function (Blueprint $table) {
            $table->increments('chuongtrinh_id');
            $table->timestamps('');
            $table->unsignedInteger('user_id');
            $table->string('ten_ct');
            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('chuongtrinhs');
    }
}
