<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('employee_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id')->unsigned();  
            $table->timestamps();
            $table->boolean('married')->nullable()->comment('0 is married');
            $table->string('spouse_name')->nullable();
            $table->string('email');
            $table->string('phone');  
            $table->date('birthday')->nullable(); 
            $table->string('emergency_contact')->nullable();
            $table->string('emergency_contact_phone')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('address_3')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->string('country')->nullable();

            $table->foreign('employee_id')->references('id')->on('employees');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_infos');
    }
}
