<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ApplicantJobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        /**
         * PIVOT TABLE
         * --------------------------
         * Assign the applicant to the job. This table
         * is a must fill out! 
         */
        
        DB::table('applicant_job')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'applicant_id' => '1',
            'job_id' => '1'
        ]); 

        DB::table('applicant_job')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'applicant_id' => '2',
            'job_id' => '1'
        ]); 

        DB::table('applicant_job')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'applicant_id' => '3',
            'job_id' => '2'
        ]); 

        DB::table('applicant_job')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'applicant_id' => '4',
            'job_id' => '3'
        ]); 

        DB::table('applicant_job')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'applicant_id' => '5',
            'job_id' => '4'
        ]); 

        DB::table('applicant_job')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'applicant_id' => '6',
            'job_id' => '5'
        ]); 

        DB::table('applicant_job')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'applicant_id' => '7',
            'job_id' => '6'
        ]); 

        DB::table('applicant_job')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'applicant_id' => '8',
            'job_id' => '8'
        ]); 

        DB::table('applicant_job')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'applicant_id' => '9',
            'job_id' => '7'
        ]); 

        DB::table('applicant_job')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'applicant_id' => '10',
            'job_id' => '8'
        ]); 

        DB::table('applicant_job')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'applicant_id' => '11',
            'job_id' => '9'
        ]); 

        DB::table('applicant_job')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'applicant_id' => '12',
            'job_id' => '2'
        ]); 

        DB::table('applicant_job')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'applicant_id' => '13',
            'job_id' => '4'
        ]); 

    }
}
