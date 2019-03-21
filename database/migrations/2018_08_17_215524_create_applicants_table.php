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
            $table->integer('job_id')->unsigned();
            $table->timestamps();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('email', 75);
            $table->string('phone', 22);    // not sure if this is correct. having problems
            $table->integer('gender');      // 0 female 1 male 2 choose not to identify
            $table->integer('ethnicity');   
            $table->integer('veteran');     // 0 no 1 yes
            $table->integer('disability');  // 0 no 1 yes
            $table->integer('is_active');
            $table->integer('stage');
            $table->string('resume');
            $table->date('date_applied');        
           
            $table->foreign('job_id')->references('id')->on('jobs');
            
            // NOTE: I NEED TO FIGURE OUT HOW THE SCORE WILL WORK. THE RELATIONSHIP BY USERS AND COMPANY TO THE APPLICANT. 
            // also if it will be in it's own db and how to do taht by itself
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
