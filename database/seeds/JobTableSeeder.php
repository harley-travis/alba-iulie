<?php

use Illuminate\Database\Seeder;

class JobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        // php artisan tinker
        // factory(App\Job::class, 10)->create();

        DB::table('jobs')->insert([
            'title' => $faker->job, 
 
            // look at list of avaliable locations and return one of those
            'location' => 'Romania', 

            // look at list of avaliable dept and return one of those
            'department' => 'Engineering', 
            'duration' => $faker->numberBetween(0, 4), 
            'compensationType' => $faker->numberBetween(0, 1), 

            // randomize base on compenstationType
            'compensationAmount' => $faker->randomNumber(), 
            'closeDate' => $faker->date_time, 
            'description' => $faker->paragraph, 
            'work' => $faker->paragraph, 
            'qualifications' => $faker->paragraph,
            'skills' => $faker->paragraph, 
            'filled' => $faker->numberBetween(0, 1), 
            'isActive' => $faker->numberBetween(0, 1),
            'user_id' => $faker->numberBetween(0, 4)
        ]);
    }
}
