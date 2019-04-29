<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAf3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('af3', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('nameclc');
            $table->string('typeclc');
            $table->string('barangayclc');
            $table->string('municipality');
            $table->string('lrn');
            $table->string('lname');
            $table->string('fname');
            $table->string('midname');
            $table->string('nameexten');
            $table->string('sex');
            $table->string('birthdate');
            $table->string('age');
            $table->string('firstdate');
            $table->string('civil');
            $table->string('typeprogram');
            $table->string('modeprogram');
            $table->string('pisscores');
            $table->string('basicliterate');
            $table->string('neoliterate');
            $table->string('postliterate');
            $table->string('reading');
            $table->string('numeracy');
            $table->string('writing');
            $table->string('listening');
            $table->string('overallscore');
            $table->string('endprogram');
            $table->string('remarks');
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
        Schema::dropIfExists('af3');
    }
}
