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
            $table->timestamps();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('email', 75);
            $table->string('phone', 10);
            $table->integer('is_active');
            $table->integer('stage');
            $table->string('resume');
            $table->date('date_applied');        
            $table->integer('companies_id');
            
            // fk
            // score 1 to 1 ? <-- think more about
            
            
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
