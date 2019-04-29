<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAf2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('af2', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('date');
            $table->string('lrn');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('nameexten');
            $table->string('midname');
            $table->string('purok');
            $table->string('barangay');
            $table->string('municipality');
            $table->string('province');
            $table->string('birthdate');
            $table->string('placebirth');
            $table->string('sex');
            $table->string('civil');
            $table->string('religion');
            $table->string('ip');
            $table->string('mothertongue');
            $table->string('pwd');
            $table->string('fatherlname');
            $table->string('fatherfname');
            $table->string('fathermidname');
            $table->string('fatheroccupation');
            $table->string('motherlname');
            $table->string('motherfname');
            $table->string('mothermidname');
            $table->string('motheroccupation');
            $table->string('elementary');
            $table->string('secondary');
            $table->string('dropschool');
            $table->string('alsbefore');
            $table->string('nameprogram');
            $table->string('levelliteracy');
            $table->string('yearattended');
            $table->string('completeprogram');
            $table->string('ifyes');
            $table->string('inkms');
            $table->string('hoursmins');
            $table->string('gethome');
            $table->string('monday');
            $table->string('tuesday');
            $table->string('wednesday');
            $table->string('thursday');
            $table->string('friday');
            $table->string('saturday');
            $table->string('sunday');
            $table->string('faciname');
            $table->string('learners');
            $table->softDeletes();
                  $table->foreign('user_id')
                  ->references('id')->on('users');


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
        Schema::dropIfExists('af2');
    }
}
