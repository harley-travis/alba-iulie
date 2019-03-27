<?php

use Faker\Generator as Faker;

$autoIncrement = autoIncrement();

$factory->define(App\EmployeeInfo::class, function (Faker $faker) use ($autoIncrement) {
    $autoIncrement->next();
    return [
        'created_at' => $faker->date,
        'updated_at' => $faker->date,
        'birthday' => $faker->date,
        'married' => $faker->numberBetween(0, 1),
        'spouse_name' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'emergency_contact' => $faker->name,
        'emergency_contact_phone' => $faker->phoneNumber,
        'address_1' => $faker->address,
        'address_2' => $faker->secondaryAddress,
        'address_3' => '',
        'state' => $faker->state,
        'city' => $faker->city,
        'zip' => $faker->postcode,
        'country' => $faker->country,
        'employee_id' => $autoIncrement->current(),
    ];
});

function autoIncrement() {
    for ($i = 1; $i < 1000; $i++) {
        yield $i;
    }
}