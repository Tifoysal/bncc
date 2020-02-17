<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQmastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qmasters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->integer('cdt_id');
            $table->string('email');
            $table->string('mobile');
            $table->date('join');
            $table->date('left')->nullable();
            $table->string('status');
            $table->timestamps();
                $table->foreign('user_id')->references('id')->on('users')
                    ->onUpdate('cascade');          
                     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qmasters');
    }
}
