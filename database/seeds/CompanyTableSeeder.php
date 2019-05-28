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
            'logo' => '/companies/1/logo/logo.png',
        ]);
    
        DB::table('companies')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Netflix', 
            'bio' => 'Streaming all the digital content',
            'logo' => '/companies/2/logo/logo.png'
        ]);

        DB::table('companies')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'White July', 
            'bio' => 'The App Creator',
            'logo' => '/images/logo.png'
        ]);
    }
}
