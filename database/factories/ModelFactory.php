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

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'username' => $faker->username,
        'email' => $faker->email,
        'password' => str_random(10),
        'location_lon' => $faker->longitude,
        'location_lat' => $faker->latitude,
        'location_city' => $faker->city,
        'location_country' => $faker->country,
        'remember_token' => str_random(10),
    ];
});
