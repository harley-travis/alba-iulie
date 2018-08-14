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
            $table->timestamps();
            $table->string('title');
            $table->string('location');
            $table->string('department');
            $table->string('duration');
            $table->integer('compensationType');
            $table->integer('compensationAmount');
            $table->longText('description');
            $table->longText('work');
            $table->longText('qualifications');
            $table->longText('skills');
            // $table->integer('counter');
            $table->integer('isActive');
            $table->date('filled');
            $table->date('closeDate');
            $table->integer('user_id');
            $table->integer('questions_id');

            // date filled?
            // job filled??            
            // company id
            
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
