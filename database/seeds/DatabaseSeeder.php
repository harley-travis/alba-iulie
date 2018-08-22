<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        // php artisan migrate:refresh [update database columns]
        // php artisan db:seed [insert this data below to the db]

        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Tony Stark',
            'email' =>'tony@gmail.com',
            'password' => bcrypt('test'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Peter Parker',
            'email' =>'peter@gmail.com',
            'password' => bcrypt('test'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // JOBS
        DB::table('jobs')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'title' => 'Personal Assistant', 
            'location' => 'California', 
            'department' => 'Product', 
            'duration' => 1, 
            'compensationType' => 0, 
            'compensationAmount' => 50000, 
            'description' => 'good description', 
            'work' => 'drive tony around', 
            'qualifications' => 'high school grad',
            'skills' => 'drive cars', 
            'isActive' => '0',
            'filled' => '2001-10-15',
            'closeDate' => '2017-06-18',
            'user_id' => '1',
            'companies_id' => '1',
           // 'questions_id' => '1'
        ]);

        DB::table('jobs')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'title' => 'Head of Security', 
            'location' => 'California', 
            'department' => 'Product', 
            'duration' => 1, 
            'compensationType' => 0, 
            'compensationAmount' => 405000, 
            'description' => 'take on daily challenges of the office', 
            'work' => 'protect avengers tower', 
            'qualifications' => 'must be old enough to drive a limo',
            'skills' => 'karate', 
            'isActive' => '0',
            'filled' => '2001-10-15',
            'closeDate' => '2017-06-18',
            'user_id' => '1',
            'companies_id' => '1',
            //'questions_id' => '1'
        ]);

        DB::table('jobs')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'title' => 'Iron Spider', 
            'location' => 'Arizona', 
            'department' => 'Product', 
            'duration' => 2, 
            'compensationType' => 1, 
            'compensationAmount' => 20, 
            'description' => 'good description', 
            'work' => 'lots of work', 
            'qualifications' => 'super powers',
            'skills' => 'stick to walls or swing', 
            'isActive' => '0',
            'filled' => '2001-10-15',
            'closeDate' => '2017-06-18',
            'user_id' => '2',
            'companies_id' => '2',
           // 'questions_id' => '2'
        ]);

        DB::table('jobs')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'title' => 'Suit Lady', 
            'location' => 'Arizona', 
            'department' => 'Product', 
            'duration' => 2, 
            'compensationType' => 1, 
            'compensationAmount' => 20, 
            'description' => 'Be a robot and work better than Siri', 
            'work' => 'give me the data when needed', 
            'qualifications' => 'must be a robot',
            'skills' => 'quick google searching', 
            'isActive' => '0',
            'filled' => '2001-10-15',
            'closeDate' => '2017-06-18',
            'user_id' => '2',
            'companies_id' => '2',
            //'questions_id' => '2'
        ]);

        factory(App\Job::class, 50)->create();

        // QUESTIONS 
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'title' => 'Relocation', 
            'question' => 'Are you willing to relocate?', 
            'interview_stage' => '0', 
            'job_id' => '1'
        ]);
        
        DB::table('questions')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'title' => 'Experience', 
            'question' => 'How many years of experience do you have?', 
            'interview_stage' => '0', 
            'job_id' => '2'
        ]);

        // COMPANIES
        DB::table('companies')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'company_name' => 'Avengers', 
            'bio' => 'Earths Mightest Heros',
            'user_id' => '1'
        ]);
    
        DB::table('companies')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'company_name' => 'Netflix', 
            'bio' => 'Streaming all the digital content',
            'user_id' => '2'
        ]);

        // APPLICANTS
        DB::table('applicants')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'first_name' => 'Gob', 
            'last_name' => 'Bluth', 
            'email' => 'gob@bluth.com', 
            'phone' => '6549871452', 
            'gender' => '1',
            'ethnicity' => '3',
            'veteran'   => '0',
            'disability'    => '0',
            'is_active' => '0', 
            'stage' => '0', 
            'resume' => 'companies/1/resumes/Harley_Travis_resume.pdf', 
            'date_applied' => Carbon::now(), 
            'companies_id' => '1'
        ]);
            
        DB::table('applicants')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'first_name' => 'Buster', 
            'last_name' => 'Bluth', 
            'email' => 'buster@bluth.com', 
            'phone' => '8004459874', 
            'gender' => '1',
            'ethnicity' => '1',
            'veteran'   => '1',
            'disability'    => '1',
            'is_active' => '0', 
            'stage' => '0', 
            'resume' => 'companies/1/resumes/natalie_allio_resume.png',
            'date_applied' => Carbon::now(), 
            'companies_id' => '1'
        ]);

        factory(App\Applicant::class, 50)->create();

        // APPLICANTS_JOBS PIVOT TABLE
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
            'job_id' => '2'
        ]); 

        // seed the pivot table
        $jobs = App\Job::all();

        App\Applicant::all()->each(function ($applicant) use ($jobs) { 
            $applicant->jobs()->attach(
                $jobs->random(rand(1, 3))->pluck('id')->toArray()
            ); 
        });

    }
}
