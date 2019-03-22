<?php

use Faker\Generator as Faker;

// make sure that you define the model in the function when creating a new factory

$factory->define(App\Applicant::class, function (Faker $faker) {
    return [       
        'created_at' => $faker->date,
        'updated_at' => $faker->date,
        'first_name' => $faker->firstName, 
        'last_name' => $faker->lastName, 
        'email' => $faker->email, 
        'phone' => $faker->phoneNumber, 
        'gender' => $faker->numberBetween(0, 2),
        'ethnicity' => $faker->numberBetween(0, 6),
        'veteran'   => $faker->numberBetween(0, 1),
        'disability'    => $faker->numberBetween(0, 1),
        'is_active' => '0', 
        'stage' => '0', 
        'resume' => 'companies/1/resumes/natalie_allio_resume.png',
        'date_applied' => $faker->date, 
        'job_id' => '1',
        'company_id' => '1',
    ];
});
