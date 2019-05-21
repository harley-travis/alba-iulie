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
        DB::table('reports')->insert([
            'job_id' => '1',
            'date_filled' => '2018-10-11',
            'visits' => '10',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('reports')->insert([
            'job_id' => '2',
            'date_filled' => null,
            'visits' => '20',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('reports')->insert([
            'job_id' => '3',
            'date_filled' => '2017-08-05',
            'visits' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('reports')->insert([
            'job_id' => '4',
            'date_filled' => '2016-04-09',
            'visits' => '7',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('reports')->insert([
            'job_id' => '5',
            'date_filled' => null,
            'visits' => '17',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('reports')->insert([
            'job_id' => '6',
            'date_filled' => null,
            'visits' => '100',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('reports')->insert([
            'job_id' => '7',
            'date_filled' => null,
            'visits' => '32',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('reports')->insert([
            'job_id' => '8',
            'date_filled' => '2018-03-18',
            'visits' => '48',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('reports')->insert([
            'job_id' => '9',
            'date_filled' => '2018-03-20',
            'visits' => '60',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('reports')->insert([
            'job_id' => '10',
            'date_filled' => null,
            'visits' => '23',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('reports')->insert([
            'job_id' => '11',
            'date_filled' => '2013-05-25',
            'visits' => '500',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    
    }
}
