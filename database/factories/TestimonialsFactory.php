<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Testimonials;
use Faker\Generator as Faker;

$factory->define(Testimonials::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'body' => $faker->text,
        'website' => $faker->word,
        'rating' => $faker->randomDigitNotNull,
        'published' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'status_id' => $faker->randomDigitNotNull
    ];
});
