<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('puo_id');
            $table->string('name');
            $table->string('mobile');
            $table->string('email');
            $table->string('rank');
            $table->date('join');
            $table->date('left')->nullable();
            $table->text('photo')->nullable();
            $table->string('gender');
            $table->string('role');
            $table->string('status');
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
        Schema::dropIfExists('puos');
    }
}
