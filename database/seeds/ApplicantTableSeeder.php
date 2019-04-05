<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ApplicantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
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
            'is_active' => '1', 
            'resume' => 'companies/1/resumes/Harley_Travis_resume.pdf', 
            'date_applied' => Carbon::now(), 
            'job_id' => '1',
            'company_id' => '1',
        ]);

        DB::table('applicants')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'first_name' => 'George Michael', 
            'last_name' => 'Bluth', 
            'email' => 'george.michael@bluth.com', 
            'phone' => '9998885412', 
            'gender' => '1',
            'ethnicity' => '2',
            'veteran'   => '1',
            'disability'    => '1',
            'is_active' => '1', 
            'resume' => 'companies/1/resumes/Harley_Travis_resume.pdf', 
            'date_applied' => Carbon::now(), 
            'job_id' => '1',
            'company_id' => '1',
        ]);

        DB::table('applicants')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'first_name' => 'Lucile', 
            'last_name' => 'Bluth', 
            'email' => 'lucile@bluth.com', 
            'phone' => '2221114523', 
            'gender' => '0',
            'ethnicity' => '1',
            'veteran'   => '0',
            'disability'    => '1',
            'is_active' => '1', 
            'resume' => 'companies/1/resumes/Harley_Travis_resume.pdf', 
            'date_applied' => Carbon::now(), 
            'job_id' => '2',
            'company_id' => '1',
        ]);

        DB::table('applicants')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'first_name' => 'Lindasy', 
            'last_name' => 'Bluth', 
            'email' => 'lindsay@bluth.com', 
            'phone' => '6546549879', 
            'gender' => '0',
            'ethnicity' => '1',
            'veteran'   => '0',
            'disability'    => '0',
            'is_active' => '1', 
            'resume' => 'companies/1/resumes/Harley_Travis_resume.pdf', 
            'date_applied' => Carbon::now(), 
            'job_id' => '3',
            'company_id' => '1',
        ]);

        DB::table('applicants')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'first_name' => 'Tobais', 
            'last_name' => 'Funke', 
            'email' => 'tobais@bluth.com', 
            'phone' => '3216541654', 
            'gender' => '1',
            'ethnicity' => '1',
            'veteran'   => '0',
            'disability'    => '1',
            'is_active' => '1', 
            'resume' => 'companies/1/resumes/Harley_Travis_resume.pdf', 
            'date_applied' => Carbon::now(), 
            'job_id' => '4',
            'company_id' => '1',
        ]);

        DB::table('applicants')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'first_name' => 'George', 
            'last_name' => 'Bluth', 
            'email' => 'george@bluth.com', 
            'phone' => '7774448888', 
            'gender' => '1',
            'ethnicity' => '1',
            'veteran'   => '0',
            'disability'    => '0',
            'is_active' => '1', 
            'resume' => 'companies/1/resumes/Harley_Travis_resume.pdf', 
            'date_applied' => Carbon::now(), 
            'job_id' => '5',
            'company_id' => '1',
        ]);

        DB::table('applicants')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'first_name' => 'Micahel', 
            'last_name' => 'Bluth', 
            'email' => 'Michael@bluth.com', 
            'phone' => '9998885555', 
            'gender' => '1',
            'ethnicity' => '1',
            'veteran'   => '0',
            'disability'    => '0',
            'is_active' => '1', 
            'resume' => 'companies/1/resumes/Harley_Travis_resume.pdf', 
            'date_applied' => Carbon::now(), 
            'job_id' => '6',
            'company_id' => '1',
        ]);

        DB::table('applicants')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'first_name' => 'Micahel', 
            'last_name' => 'Bluth', 
            'email' => 'Michael@bluth.com', 
            'phone' => '9998885555', 
            'gender' => '1',
            'ethnicity' => '1',
            'veteran'   => '0',
            'disability'    => '0',
            'is_active' => '1', 
            'resume' => 'companies/1/resumes/Harley_Travis_resume.pdf', 
            'date_applied' => Carbon::now(), 
            'job_id' => '8',
            'company_id' => '1',
        ]);

        DB::table('applicants')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'first_name' => 'Maybe', 
            'last_name' => 'Bluth', 
            'email' => 'Maybe@bluth.com', 
            'phone' => '6665558888', 
            'gender' => '0',
            'ethnicity' => '1',
            'veteran'   => '0',
            'disability'    => '0',
            'is_active' => '1', 
            'resume' => 'companies/1/resumes/Harley_Travis_resume.pdf', 
            'date_applied' => Carbon::now(), 
            'job_id' => '7',
            'company_id' => '1',
        ]);

        DB::table('applicants')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'first_name' => 'Oscar', 
            'last_name' => 'Bluth', 
            'email' => 'oscar@bluth.com', 
            'phone' => '2221110000', 
            'gender' => '1',
            'ethnicity' => '1',
            'veteran'   => '0',
            'disability'    => '0',
            'is_active' => '1', 
            'resume' => 'companies/1/resumes/Harley_Travis_resume.pdf', 
            'date_applied' => Carbon::now(), 
            'job_id' => '8',
            'company_id' => '1',
        ]);

        DB::table('applicants')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'first_name' => 'Franklin', 
            'last_name' => 'Bluth', 
            'email' => 'fraklin@bluth.com', 
            'phone' => '4449997777', 
            'gender' => '0',
            'ethnicity' => '1',
            'veteran'   => '0',
            'disability'    => '0',
            'is_active' => '1', 
            'resume' => 'companies/1/resumes/Harley_Travis_resume.pdf', 
            'date_applied' => Carbon::now(), 
            'job_id' => '9',
            'company_id' => '1',
        ]);

        DB::table('applicants')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'first_name' => 'Luke', 
            'last_name' => 'Skywalker', 
            'email' => 'luke@starwars.com', 
            'phone' => '8582521474', 
            'gender' => '1',
            'ethnicity' => '1',
            'veteran'   => '0',
            'disability'    => '0',
            'is_active' => '1', 
            'resume' => 'companies/1/resumes/Harley_Travis_resume.pdf', 
            'date_applied' => Carbon::now(), 
            'job_id' => '2',
            'company_id' => '1',
        ]);

        DB::table('applicants')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'first_name' => 'Han', 
            'last_name' => 'Solo', 
            'email' => 'han@starwars.com', 
            'phone' => '5464548745', 
            'gender' => '1',
            'ethnicity' => '1',
            'veteran'   => '0',
            'disability'    => '0',
            'is_active' => '1', 
            'resume' => 'companies/1/resumes/Harley_Travis_resume.pdf', 
            'date_applied' => Carbon::now(), 
            'job_id' => '4',
            'company_id' => '1',
        ]);

        // APPLICANT FOR USER_ID 2
        // DB::table('applicants')->insert([
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //     'first_name' => 'Buster', 
        //     'last_name' => 'Bluth', 
        //     'email' => 'buster@bluth.com', 
        //     'phone' => '8004459874', 
        //     'gender' => '1',
        //     'ethnicity' => '1',
        //     'veteran'   => '1',
        //     'disability'    => '1',
        //     'is_active' => '0', 
        //     'resume' => 'companies/1/resumes/natalie_allio_resume.png',
        //     'date_applied' => Carbon::now(), 
        //     'job_id' => '1',
        //     'company_id' => '2',
        // ]);

        // factory(App\Applicant::class, 20)->create();

    }
}
