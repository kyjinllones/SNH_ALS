<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrolleesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollees', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('name');
            $table->string('sex');
            $table->string('birthdate');
            $table->string('age');
            $table->string('mothertongue');
            $table->string('ip');
            $table->string('religion');
            $table->string('purok');
            $table->string('barangay');
            $table->string('municipality');
            $table->string('province');
            $table->string('fathersname');
            $table->string('mothersname');
            $table->string('contactno');
            $table->string('lastgradelevel');
            $table->string('date');
            $table->string('interested');
            $table->string('preffer');
            $table->string('lrn');
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
        Schema::dropIfExists('enrollees');
    }
}
