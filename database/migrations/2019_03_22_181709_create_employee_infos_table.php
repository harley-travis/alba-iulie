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
            $table->boolean('married');
            $table->string('spouse_name');
            $table->string('email');
            $table->string('phone');  
            $table->date('birthday'); 
            $table->string('emergency_contact');
            $table->string('emergency_contact_phone');
            $table->string('address_1');
            $table->string('address_2')->nullable();
            $table->string('address_3')->nullable();
            $table->string('state');
            $table->string('city');
            $table->string('zip');
            $table->string('country');

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
