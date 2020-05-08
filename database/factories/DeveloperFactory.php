<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Developer;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Developer::class, function (Faker $faker) {
    return [
        'DEV_TEL' => $faker->DEV_TEL,
        'DEV_ID_CARD' => $faker->DEV_ID_CARD,
        'DEV_IMG' => $faker->unique()->DEV_IMG,
        'DEV_BIRTHDAY' => $faker->DEV_BIRTHDAY,
        'DEV_AGE' => $faker->DEV_AGE,
        'DEV_GENDER' => $faker->DEV_GENDER,
        'DEV_ADDRESS' => $faker->DEV_GENDER,
        'ZIPCODE_ID' => $faker->ZIPCODE_ID,
        'USER_ID' => $faker->unique()->USER_ID,
        'USER_EMAIL' => $faker->unique()->safeEmail,
    ];
});