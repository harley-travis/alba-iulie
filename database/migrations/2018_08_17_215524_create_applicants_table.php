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
            $table->integer('company_id')->unsigned();
            $table->timestamps();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');    // not sure if this is correct. having problems
            $table->integer('gender');      // 0 female 1 male 2 choose not to identify
            $table->integer('ethnicity')->comment('see migration for legend');   
            $table->integer('veteran');     // 0 no 1 yes
            $table->integer('disability');  // 0 no 1 yes
            $table->integer('is_active')->comment('0 is inActive');
            $table->string('resume');
            $table->date('date_applied');        
           
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');;
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');;
            
        });
    }

    /**
     * ETHNICITY LEGEND
     * --------------------------------------
     * 0 = American Indian or Alaska Native
     * 1 = Asian
     * 2 = Black or African American
     * 3 = Hispanic or Latino
     * 4 = Native Hawaiian or Other Pacific Islander
     * 5 = White
     * 6 = Other
     * 7 = Choose not to Identify
     */

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
