<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Products;
use Faker\Generator as Faker;

$factory->define(Products::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'description' => $faker->text,
        'short' => $faker->text,
        'demo_request_link' => $faker->word,
        'demo_form' => $faker->word,
        'slug' => $faker->word,
        'type' => $faker->word,
        'chicklet' => $faker->word,
        'published' => $faker->word,
        'meta_title' => $faker->word,
        'meta_description' => $faker->text,
        'facebook_title' => $faker->word,
        'facebook_desc' => $faker->text,
        'twitter_post_title' => $faker->word,
        'twitter_post_description' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'status_id' => $faker->randomDigitNotNull,
        'industries_id' => $faker->randomDigitNotNull
    ];
});
