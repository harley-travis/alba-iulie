<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName', 50);
            $table->string('lastName', 50);
            $table->string('email', 75);
            $table->string('phone', 10);
            $table->integer('isActive');
            $table->integer('stage');
            $table->date('dateApplied');
            
            // fk
            // job
            // company
            // user
            // score
            
            
            // NOTE: I NEED TO FIGURE OUT HOW THE SCORE WILL WORK. THE RELATIONSHIP BY USERS AND COMPANY TO THE APPLICANT. also if it will be in it's own db and how to do taht by itself
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicants');
    }
}
