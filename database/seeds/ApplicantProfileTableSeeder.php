<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ApplicantProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        DB::table('applicant_profiles')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'stage' => '0', 
            'interview_one' => '2019-03-30', 
            'interview_two' => '2019-04-30', 
            'interview_three' => '2019-05-30', 
            'applicant_id' => '1',
        ]); 

        DB::table('applicant_profiles')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'stage' => '1', 
            'interview_one' => '2019-03-30', 
            'interview_two' => '2019-04-30', 
            'interview_three' => '2019-05-30', 
            'applicant_id' => '2',
        ]); 

        DB::table('applicant_profiles')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'stage' => '2', 
            'interview_one' => '2019-03-30', 
            'interview_two' => '2019-04-30', 
            'interview_three' => '2019-05-30', 
            'applicant_id' => '3',
        ]); 

        DB::table('applicant_profiles')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'stage' => '3', 
            'interview_one' => '2019-03-30', 
            'interview_two' => '2019-04-30', 
            'interview_three' => '2019-05-30', 
            'applicant_id' => '4',
        ]); 

        DB::table('applicant_profiles')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'stage' => '4', 
            'interview_one' => '2019-03-30', 
            'interview_two' => '2019-04-30', 
            'interview_three' => '2019-05-30', 
            'applicant_id' => '5',
        ]); 

        DB::table('applicant_profiles')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'stage' => '5', 
            'interview_one' => '2019-03-30', 
            'interview_two' => '2019-04-30', 
            'interview_three' => '2019-05-30', 
            'applicant_id' => '6',
        ]); 

        DB::table('applicant_profiles')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'stage' => '6', 
            'interview_one' => '2019-03-30', 
            'interview_two' => '2019-04-30', 
            'interview_three' => '2019-05-30', 
            'applicant_id' => '7',
        ]); 

        DB::table('applicant_profiles')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'stage' => '7', 
            'interview_one' => '2019-03-30', 
            'interview_two' => '2019-04-30', 
            'interview_three' => '2019-05-30', 
            'applicant_id' => '8',
        ]); 

        DB::table('applicant_profiles')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'stage' => '0', 
            'interview_one' => '2019-03-30', 
            'interview_two' => '2019-04-30', 
            'interview_three' => '2019-05-30', 
            'applicant_id' => '9',
        ]); 

        DB::table('applicant_profiles')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'stage' => '1', 
            'interview_one' => '2019-03-30', 
            'interview_two' => '2019-04-30', 
            'interview_three' => '2019-05-30', 
            'applicant_id' => '10',
        ]); 

        DB::table('applicant_profiles')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'stage' => '2', 
            'interview_one' => '2019-03-30', 
            'interview_two' => '2019-04-30', 
            'interview_three' => '2019-05-30', 
            'applicant_id' => '11',
        ]);
        
        DB::table('applicant_profiles')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'stage' => '3', 
            'interview_one' => '2019-03-30', 
            'interview_two' => '2019-04-30', 
            'interview_three' => '2019-05-30', 
            'applicant_id' => '12',
        ]);

        DB::table('applicant_profiles')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'stage' => '4', 
            'interview_one' => '2019-03-30', 
            'interview_two' => '2019-04-30', 
            'interview_three' => '2019-05-30', 
            'applicant_id' => '13',
        ]);
       // factory(App\ApplicantProfile::class, 20)->create();

    }
}
