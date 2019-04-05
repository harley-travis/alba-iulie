<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class EmployeeInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('employee_infos')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'birthday' => '1989-11-11',
            'married' => '0',
            'spouse_name' => 'Natasha Romanoff',
            'email' => 'steve@gmail.com',
            'phone' => '4358014587',
            'emergency_contact' => 'Natasha Romanoff',
            'emergency_contact_phone' => '6669998547',
            'address_1' => '123 W 432 S',
            'address_2' => '',
            'address_3' => '',
            'state' => 'California',
            'city' => 'Sacramento',
            'zip' => '90210',
            'country' => 'USA',
            'employee_id' => '1',
        ]);
        //factory(App\EmployeeInfo::class, 20)->create();

    }
}
