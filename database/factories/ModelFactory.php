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

/* DEFAULT
$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
*/

/* Regular User */
$factory->defineAs(App\User::class, 'user', function (Faker\Generator $faker) {
    return [
    'name' => $faker->name,
    'email' => $faker->unique()->email,
    'password' => bcrypt(str_random(10)),
    'type' => 'access',
    'remember_token' => str_random(10),
    ];
});

/* Admin User */
$factory->defineAs(App\User::class, 'admin', function (Faker\Generator $faker) {
    return [
    'name' => $faker->name,
    'email' => $faker->unique()->email,
    'password' => bcrypt(str_random(10)),
    'type' => 'admin',
    'remember_token' => str_random(10),
    ];
});