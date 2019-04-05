<?php

use Faker\Generator as Faker;

$autoIncrement = autoIncrement();

$factory->define(App\Applicant::class, function (Faker $faker) use ($autoIncrement) {
    $autoIncrement->next();
    return [       
        'created_at' => $faker->date,
        'updated_at' => $faker->date,
        'first_name' => $faker->firstName, 
        'last_name' => $faker->lastName, 
        'email' => $faker->email, 
        'phone' => $faker->phoneNumber, 
        'gender' => $faker->numberBetween(0, 2),
        'ethnicity' => $faker->numberBetween(0, 6),
        'veteran' => $faker->numberBetween(0, 1),
        'disability' => $faker->numberBetween(0, 1),
        'is_active' => $faker->numberBetween(0, 1), 
        'resume' => 'companies/1/resumes/natalie_allio_resume.png',
        'date_applied' => $faker->date, 
        'job_id' => '1', //<!-- GET RID OF THIS NUMBER. NEEDS TO BE DYNMANIC
        'company_id' => '1',
    ];
});

function autoIncrement() {
    for ($i = 1; $i < 1000; $i++) {
        yield $i;
    }
}

/**
 * 
 * NEED A WAY TO ASSIGNED JOBS THAT 
 * 1) ARE TIED TO THE COMPANY ID
 * 2) ARE ACTIVE 
 * 3) DO NOT EXCEED THE NUMBER OF JOB IDS
 */