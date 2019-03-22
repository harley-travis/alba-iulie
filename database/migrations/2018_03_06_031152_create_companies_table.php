<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->string('name');
            $table->string('bio');
            
            //$table->foreign('user_id')->references('id')->on('users');

            // NEED TO FIGURE OUT ABOUT THE EMAIL TEMPLAETS
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
