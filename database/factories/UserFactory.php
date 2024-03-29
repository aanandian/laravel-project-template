<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    $faker->addProvider(new \Faker\Provider\id_ID\Person($faker));

    return [
        'name'              => $faker->name,
        'username'          => $faker->unique()->userName,
        'email'             => $faker->unique()->safeEmail,
        'password'          => Hash::make('secret'),
        'remember_token'    => str_random(10),
    ];
});
