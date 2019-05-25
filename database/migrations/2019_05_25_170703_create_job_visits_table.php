<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_visits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id')->unsigned();  
            $table->integer('company_id')->unsigned();  
            $table->timestamps();
            $table->integer('visits');
            $table->date('date_filled')->nullable();

            $table->foreign('job_id')->references('id')->on('jobs');
            $table->foreign('company_id')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_visits');
    }
}
