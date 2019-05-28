<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        // COMPANIES
        $this->call(CompanyTableSeeder::class);

        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'company_id' => '1',
            'name' => 'Tony Stark',
            'email' =>'tony@gmail.com',
            'password' => bcrypt('test'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'avatar' => '/companies/1/employees/tony-stark.jpg',
        ]);

        DB::table('users')->insert([
            'company_id' => '1',
            'name' => 'Steve Rogers',
            'email' =>'steve@gmail.com',
            'password' => bcrypt('test'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'avatar' => '/companies/1/employees/steve-rogers.jpg',
        ]);

        DB::table('users')->insert([
            'company_id' => '2',
            'name' => 'Peter Parker',
            'email' =>'peter@gmail.com',
            'password' => bcrypt('test'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'avatar' => '/companies/2/employees/peter-parker.jpg',
        ]);

        DB::table('users')->insert([
            'company_id' => '3',
            'name' => 'Travis Harley',
            'email' =>'travis@gmail.com',
            'password' => bcrypt('test'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'avatar' => '/companies/3/employees/travis-harley.jpg',
        ]);


        // JOBS
        $this->call(JobTableSeeder::class);   

        // APPLICANTS
        $this->call(ApplicantTableSeeder::class);

        // APPLICANTS_JOBS PIVOT TABLE
        $this->call(ApplicantJobTableSeeder::class);

        // APPLICANT_PROFILE
        $this->call(ApplicantProfileTableSeeder::class);

        // EMPLOYEES
        $this->call(EmployeeTableSeeder::class);

        // EMPLOYEE_INFO
        $this->call(EmployeeInfoTableSeeder::class);

        // REPORTS
        $this->call(ReportTableSeeder::class);
        
        // seed the pivot table DON' DELETE!
        // $jobs = App\Job::all();
        // App\Applicant::all()->each(function ($applicant) use ($jobs) { 
        //     $applicant->jobs()->attach(
        //         $jobs->random(rand(1, 3))->pluck('id')->toArray()
        //     ); 
        // });
      
    }
}
