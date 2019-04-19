<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TicketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('tickets')->insert([
            'user_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'subject' => 'Serious App problem!', 
            'issue' => 'please fix your app', 
            'status' => '0', 

        ]);

        DB::table('tickets')->insert([
            'user_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'subject' => 'How to add jobs?', 
            'issue' => 'I cant figure this out', 
            'status' => '1', 

        ]);

        DB::table('tickets')->insert([
            'user_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'subject' => 'embedding jobs', 
            'issue' => 'Where do I embed my job postings?', 
            'status' => '2', 

        ]);
    }
}
