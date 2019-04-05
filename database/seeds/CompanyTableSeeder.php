<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Avengers', 
            'bio' => 'Earths Mightest Heros',
        ]);
    
        DB::table('companies')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Netflix', 
            'bio' => 'Streaming all the digital content',
        ]);
    }
}
