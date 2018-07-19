<?php

use Faker\Generator as Faker;

$factory->define(App\Job::class, function (Faker $faker) {
    return [
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
        'isActive' => $faker->numberBetween(0, 1)
    ];
});
