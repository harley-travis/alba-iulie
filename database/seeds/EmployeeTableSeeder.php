<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('employees')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'company_id' => '1',
            'user_id' => '1',  
            'first_name' => 'Tony',
            'last_name' => 'Stark',  
            'work_email' => 'tony@gmail.com', 
            'work_phone' => '8885556543', 
            'ext' => '234', 
            'position' => 'Team Lead', 
            'department' => 'Engineering',
            'location' => 'New York', 
            'duration' => '0',
            'gender' => '0',
            'ethnicity' => '0',
            'veteran' => '1',
            'disability' => '0',
            'compensationType' => '0',
            'compensationAmount' => '100000',
            'date_hired' => Carbon::now(),
            'date_left' => '2001-10-15',
            'active' => '1',
        ]);

        DB::table('employees')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'company_id' => '2',
            'user_id' => '2',  
            'first_name' => 'Peter',
            'last_name' => 'Parker',  
            'work_email' => 'peter@gmail.com', 
            'work_phone' => '8885556543', 
            'ext' => '234', 
            'position' => 'Team Lead', 
            'department' => 'Engineering',
            'location' => 'New York', 
            'duration' => '0',
            'gender' => '0',
            'ethnicity' => '0',
            'veteran' => '1',
            'disability' => '0',
            'compensationType' => '0',
            'compensationAmount' => '100000',
            'date_hired' => Carbon::now(),
            'date_left' => '2001-10-15',
            'active' => '1',
        ]);

        DB::table('employees')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'company_id' => '3',
            'user_id' => '3',  
            'first_name' => 'Travis',
            'last_name' => 'Harley',  
            'work_email' => 'travis@gmail.com', 
            'work_phone' => '8885556543', 
            'ext' => '234', 
            'position' => 'Team Lead', 
            'department' => 'Engineering',
            'location' => 'New York', 
            'duration' => '0',
            'gender' => '0',
            'ethnicity' => '0',
            'veteran' => '1',
            'disability' => '0',
            'compensationType' => '0',
            'compensationAmount' => '100000',
            'date_hired' => Carbon::now(),
            'date_left' => '2001-10-15',
            'active' => '1',
        ]);
       
        DB::table('employees')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'company_id' => '1',
            'user_id' => '4',  
            'first_name' => 'Steve',
            'last_name' => 'Rogers',  
            'work_email' => 'steve@avengers.com', 
            'work_phone' => '8885556543', 
            'ext' => '234', 
            'position' => 'Team Lead', 
            'department' => 'Engineering',
            'location' => 'New York', 
            'duration' => '0',
            'gender' => '0',
            'ethnicity' => '0',
            'veteran' => '1',
            'disability' => '0',
            'compensationType' => '0',
            'compensationAmount' => '100000',
            'date_hired' => Carbon::now(),
            'date_left' => '2001-10-15',
            'active' => '1',
        ]);
        //factory(App\Employee::class, 20)->create();

    }
}
