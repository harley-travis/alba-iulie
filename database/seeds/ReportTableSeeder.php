<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ReportTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_visits')->insert([
            'job_id' => '1',
            'company_id' => '1',
            'date_filled' => '2018-10-11',
            'visits' => '10',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('job_visits')->insert([
            'job_id' => '2',
            'company_id' => '1',
            'date_filled' => null,
            'visits' => '20',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('job_visits')->insert([
            'job_id' => '3',
            'company_id' => '1',
            'date_filled' => '2017-08-05',
            'visits' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('job_visits')->insert([
            'job_id' => '4',
            'company_id' => '1',
            'date_filled' => '2016-04-09',
            'visits' => '7',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('job_visits')->insert([
            'job_id' => '5',
            'company_id' => '1',
            'date_filled' => null,
            'visits' => '17',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('job_visits')->insert([
            'job_id' => '6',
            'company_id' => '1',
            'date_filled' => null,
            'visits' => '100',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('job_visits')->insert([
            'job_id' => '7',
            'company_id' => '1',
            'date_filled' => null,
            'visits' => '32',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('job_visits')->insert([
            'job_id' => '8',
            'company_id' => '1',
            'date_filled' => '2018-03-18',
            'visits' => '48',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('job_visits')->insert([
            'job_id' => '9',
            'company_id' => '1',
            'date_filled' => '2018-03-20',
            'visits' => '60',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('job_visits')->insert([
            'job_id' => '10',
            'company_id' => '2',
            'date_filled' => null,
            'visits' => '23',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('job_visits')->insert([
            'job_id' => '11',
            'company_id' => '2',
            'date_filled' => '2013-05-25',
            'visits' => '500',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    
    }
}
