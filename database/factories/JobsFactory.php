<?php

use Faker\Generator as Faker;

$factory->define(App\Job::class, function (Faker $faker) {
    return [
        'title' => $faker->jobTitle, 
 
        // look at list of avaliable locations and return one of those
        'location' => 'Romania', 

        // look at list of avaliable dept and return one of those
        'department' => 'Engineering', 
        'duration' => $faker->numberBetween(0, 4), 
        'compensationType' => $faker->numberBetween(0, 1), 

        // randomize base on compenstationType
        'compensationAmount' => $faker->randomNumber(), 
        'closeDate' => $faker->date, 
        'description' => $faker->realText, 
        'work' => $faker->realText, 
        'qualifications' => $faker->realText,
        'skills' => $faker->realText, 
        'filled' => $faker->date, 
        'isActive' => $faker->numberBetween(0, 1),
        'user_id' => $faker->numberBetween(0, 1),
        'companies_id' => $faker->numberBetween(0, 1),
    ];
});