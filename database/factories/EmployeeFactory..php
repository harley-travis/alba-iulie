<?php

use Faker\Generator as Faker;

$factory->define(App\Employee::class, function (Faker $faker) {
    return [
        'created_at' => $faker->date,
        'updated_at' => $faker->date,
        'first_name' => $faker->firstName, 
        'last_name' => $faker->lastName, 
        'email' => $faker->email, 
        'work_email' => $faker->email, 
        'phone' => $faker->phoneNumber, 
        'work_phone' => $faker->phoneNumber, 
        'ext' => '123', 
        'position' => $faker->jobTitle, 
        'department' => 'Engineering', 
        'location' => 'Romania', 
        'duration' => $faker->numberBetween(0, 4),
        'gender' => $faker->numberBetween(0, 2),
        'ethnicity' => $faker->numberBetween(0, 6),
        'veteran'   => $faker->numberBetween(0, 1),
        'disability'    => $faker->numberBetween(0, 1),
        'compensationType' => $faker->numberBetween(0, 1), 
        'compensationAmount' => $faker->randomNumber(),
        'date_hired' => $faker->date, 
        'date_left' => $faker->date, 
        'active' => $faker->numberBetween(0, 1),
        'company_id' => '1',
        
    ];
});
