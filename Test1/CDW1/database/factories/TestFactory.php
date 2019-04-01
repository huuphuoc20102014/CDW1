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
$factory->define(App\Testimonials::class, function (Faker\Generator $faker) {
    static $password;
    //testimonials(testmon_id, testmon_name, testmon_avatar, testmon_description, testmon_position)

    return [
        'testmon_name' => $faker->sentence(3),
        'testmon_avatar' => $faker->sentence(3),
        'testmon_description' => $faker->sentence(10),
        'testmon_position' => $faker->sentence(3)  
    ];
});
