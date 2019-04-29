<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clc', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('place');
            $table->string('testing');
            $table->string('barangay');
            $table->string('municipality');
            $table->string('lrn');
             $table->string('name');
              $table->string('sex');
               $table->string('birthdate');
                $table->string('clcname');
                 $table->string('clctype');
                  $table->string('clcbarangay');
                   $table->string('municipal');
                    $table->string('leveltest');
                     $table->string('datereg');
                      $table->string('dateexam');
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
        Schema::dropIfExists('clc');
    }
}
