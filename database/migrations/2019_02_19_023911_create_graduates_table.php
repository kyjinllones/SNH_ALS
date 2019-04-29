<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGraduatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduates', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('nameexten');
            $table->string('midname');
            $table->string('purok');
            $table->string('barangay');
            $table->string('municipality');
            $table->string('province');
            $table->string('birthdate');
            $table->string('sex');
            $table->string('progenroll');
            $table->string('delmode');
            $table->string('clcname');
            $table->string('clcaddress');
            $table->string('namefaci');
            $table->string('calenyear');
            $table->integer('pispre');
            $table->integer('pispost');
            $table->Integer('blpre');
            $table->Integer('blpost');
            $table->Integer('nlpre');
            $table->Integer('nlpost');
            $table->Integer('postlpre');
            $table->Integer('postlpost');
            $table->Integer('fltreadingpre');
            $table->Integer('fltreadingpost');
            $table->Integer('fltnumeracypre');
            $table->Integer('fltnumeracypost');
            $table->Integer('fltwritingpre');
            $table->Integer('fltwritingpost');
            $table->Integer('fltlistenpre');
            $table->Integer('fltlistenpost');
            $table->Integer('overallpre');
            $table->Integer('overallpost');
            $table->string('infed1');
            $table->string('infed2');
            $table->string('infed3');
            $table->string('remarks1');
            $table->string('remarks2');
            $table->string('remarks3');
            $table->string('programs');
            $table->string('testtaken');
            $table->string('dateexam');
            $table->string('testingcenter');
            $table->string('locationcenter');
            $table->string('aeresult');
             $table->foreign('user_id')
                  ->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('graduates');
    }
}
