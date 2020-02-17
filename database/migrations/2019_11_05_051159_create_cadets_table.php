<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadets', function (Blueprint $table) {
            //For Regular Cadet
            $table->bigIncrements('id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('name')->nullable();
            $table->integer('std_id')->nullable();
            $table->integer('cdt_id')->nullable();
            $table->string('dept')->nullable();
            $table->string('rank')->nullable();
            $table->string('section')->nullable();
            $table->string('platoon')->nullable();
            $table->string('gender')->nullable();
            $table->date('join')->nullable();
            $table->date('left')->nullable();
            $table->text('photo')->nullable();
            $table->string('status')->nullable();
            $table->string('skill')->nullable();
            $table->string('responsibility')->nullable();
            $table->string('fname')->nullable();
            $table->string('foccu')->nullable();
            $table->string('mname')->nullable();
            $table->string('moccu')->nullable();
            $table->date('dob')->nullable();
            $table->string('birth_locs')->nullable();
            $table->string('blood_grp')->nullable();
            $table->string('marital')->nullable();
            $table->bigInteger('nid')->nullable();
            $table->string('religion')->nullable();
            $table->tinyInteger('sibling')->nullable();
            $table->tinyInteger('position')->nullable();
            $table->string('fmobile')->nullable();
            $table->string('mmobile')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('fbid')->nullable();
            $table->text('pre_add')->nullable();
            $table->text('par_add')->nullable();
            $table->text('exam')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('complexion')->nullable();
            $table->string('visible_mark')->nullable();
            $table->string('hobby')->nullable();
            $table->string('career')->nullable();
            $table->string('study_subject')->nullable();
            $table->string('person')->nullable();
            $table->text('eca_name')->nullable();           
            $table->string('involvement')->nullable();
            $table->string('ex_involvement')->nullable();
            $table->string('remarks')->nullable();
            
            //For Cadet Recruitment
            $table->text('instruction')->nullable();
            $table->text('id_card')->nullable();
            $table->string('semester')->nullable();            
            $table->string('nation')->nullable();            
            $table->string('ex_cdt_status')->nullable();
            $table->string('ex_cdt_id')->nullable();
            $table->string('ex_cdt_div')->nullable();
            $table->string('ex_cdt_inst')->nullable();
            $table->timestamps();
            
//            $table->foreign('id')->references('user_id')->on('users')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cadets');
    }
}
