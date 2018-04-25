<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lops', function (Blueprint $table) {
            $table->increments('lop_id');
            $table->string('ten_lop');
            $table->unsignedInteger('ma_gv');
            $table->unsignedInteger('ma_sv');
            $table->foreign('ma_gv')->references('user_id')->on('users');
            $table->foreign('ma_sv')->references('sv_id')->on('sinh_viens');
            $table->unsignedInteger('ma_mh');
            $table->foreign('ma_mh')->references('monhoc_id')->on('monhocs')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lops');
    }
}
