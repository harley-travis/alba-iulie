<?php

use Faker\Generator as Faker;

$autoIncrement = autoIncrement();

$factory->define(App\ApplicantProfile::class, function (Faker $faker) use ($autoIncrement) {
    $autoIncrement->next();
    return [
        'created_at' => $faker->date,
        'updated_at' => $faker->date,
        'stage' => $faker->numberBetween(0, 7), 
        'interview_one' => $faker->date, 
        'interview_two' => $faker->date, 
        'interview_three' => $faker->date, 
        'applicant_id' => $autoIncrement->current(),
    ];
});

function autoIncrement() {
    for ($i = 1; $i < 1000; $i++) {
        yield $i;
    }
}