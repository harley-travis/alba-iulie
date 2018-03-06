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
            $table->integer('duration');
            $table->integer('salary');
            $table->integer('compensation');
            $table->string('description');
            $table->string('work');
            $table->string('qualifications');
            $table->string('skills');
            $table->string('addInfo');
            $table->integer('counter');
            $table->integer('isActive');
            $table->date('filled');
            $table->date('timeFilled');
            $table->date('closeDate');
            
            // company id
            // user id
            
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
