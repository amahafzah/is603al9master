<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'Make' => $faker->randomElement ($array = array('Ford', 'Honday', 'Toyota')),
        'Model' => $faker->randomElement ($array = array('Mustang', 'Camary', 'Accord')),
        'Year' => $faker->year,
    ];
});
