<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
         
            $table->integer('user_id')->unsigned(); 

            $table->timestamps();
            $table->string('title');
            $table->string('location');
            $table->string('department');
            $table->integer('duration')->comment('0 = full 1 = part 2 = contract 3 = temp');
            $table->integer('compensationType');
            $table->integer('compensationAmount');
            $table->longText('description');
            $table->longText('work');
            $table->longText('qualifications');
            $table->longText('skills');  
            $table->boolean('isActive')->comment('0 is inActive');
            $table->date('filled')->nullable();
            $table->date('closeDate')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
