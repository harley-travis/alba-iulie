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
            'birthday' => '1989-05-11',
            'married' => '0',
            'spouse_name' => 'Pepper Potts',
            'email' => 'tony@gmail.com',
            'phone' => '7775554444',
            'emergency_contact' => 'Pepper Potts',
            'emergency_contact_phone' => '2220005555',
            'address_1' => '34 W Brooke DR',
            'address_2' => '',
            'address_3' => '',
            'state' => 'New York',
            'city' => 'New York City',
            'zip' => '705412',
            'country' => 'USA',
            'employee_id' => '1',
        ]);

        DB::table('employee_infos')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'birthday' => '1989-12-11',
            'married' => '0',
            'spouse_name' => 'Mary Watson',
            'email' => 'peter@gmail.com',
            'phone' => '2228887777',
            'emergency_contact' => 'Aunt May',
            'emergency_contact_phone' => '9992227785',
            'address_1' => '34 W 32 S',
            'address_2' => 'APT 332',
            'address_3' => '',
            'state' => 'New York',
            'city' => 'Queens',
            'zip' => '705687',
            'country' => 'USA',
            'employee_id' => '2',
        ]);


        DB::table('employee_infos')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'birthday' => '1989-12-11',
            'married' => '0',
            'spouse_name' => 'Zelda',
            'email' => 'travis@gmail.com',
            'phone' => '99974775555',
            'emergency_contact' => 'Zelda',
            'emergency_contact_phone' => '5558881421',
            'address_1' => 'Hyrule',
            'address_2' => '',
            'address_3' => '',
            'state' => 'Hyrule',
            'city' => 'Hyrule city',
            'zip' => '458745',
            'country' => 'USA',
            'employee_id' => '3',
        ]);

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
            'employee_id' => '4',
        ]);

        
        //factory(App\EmployeeInfo::class, 20)->create();

    }
}
