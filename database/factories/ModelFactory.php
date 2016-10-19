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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Region::class, function (Faker\Generator $faker) {
    $name = $faker->state;
    $slug = str_slug($name, '-');

    return [
        'name' => $name,
        'slug' => $slug,
    ];
});

$factory->define(App\District::class, function (Faker\Generator $faker) {
    $name = $faker->city;
    $slug = str_slug($name, '-');

    return [
        'region_id' => $faker->numberBetween(1, 26),
        'name' => $name,
        'slug' => $slug,
    ];
});

$factory->define(App\Church::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->realText(100),
        'region_id' => $faker->numberBetween(1, 26),
        'district_id' => $faker->numberBetween(1, 8),
        'description' => $faker->paragraph(4, true),
    ];
});