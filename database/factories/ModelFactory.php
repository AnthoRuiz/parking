<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Parking\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Parking\VehicleTypes::class, function (Faker\Generator $faker) {
    return [
        'nombre'        => $faker->name,
        'img'         => $faker->imageUrl(200, 200, 'food', true, 'Faker'),
    ];
});

$factory->define(Parking\Parking::class, function (Faker\Generator $faker) {
    return [
        'nombre'        => $faker->name,
    ];
});
