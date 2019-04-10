<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unsigned();  
            $table->timestamps();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('work_email')->nullable();
            $table->string('work_phone')->nullable();    
            $table->string('ext')->nullable();  
            $table->string('position');
            $table->string('department'); 
            $table->string('location');
            $table->integer('duration')->comment('0 = full 1 = part 2 = contract 3 = temp');
            $table->integer('gender')->comment('0 is female');      // 0 female 1 male 2 choose not to identify
            $table->integer('ethnicity');   
            $table->integer('veteran')->comment('0 is no');     // 0 no 1 yes
            $table->integer('disability')->comment('0 is no');  // 0 no 1 yes
            $table->integer('compensationType')->nullable();
            $table->integer('compensationAmount')->nullable();
            $table->date('date_hired'); 
            $table->date('date_left')->nullable();  
            $table->integer('active')->comment('0 is in inActive');  

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
        Schema::dropIfExists('employees');
    }
}
