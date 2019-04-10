<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('applicant_id')->unsigned(); 
            $table->timestamps();
            
            /**
             * STAGE
             * ----------------------------
             * 0) Pending
             * 1) Interview 1st Scheduled
             * 2) Interview 1st Completed
             * 3) Interview 2nd Scheduled
             * 4) Interview 2nd Completed
             * 5) Interview 3rd Scheduled
             * 6) Interview 3rd Completed
             * 7) Hired
             */
            
            $table->integer('stage');
            $table->date('interview_one')->nullable();
            $table->date('interview_two')->nullable();
            $table->date('interview_three')->nullable();

            $table->foreign('applicant_id')->references('id')->on('applicants')->onDelete('cascade');;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicant_profiles');
    }
}
