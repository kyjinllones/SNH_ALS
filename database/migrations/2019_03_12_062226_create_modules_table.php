<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
             $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('mod_title');
            $table->string('module_pdf');
            $table->string('type');
            $table->boolean('status');
               $table->softDeletes();
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
        Schema::dropIfExists('modules');
    }
}
