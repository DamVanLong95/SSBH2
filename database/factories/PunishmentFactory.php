<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Punishment;
use Faker\Generator as Faker;

$factory->define(Punishment::class, function (Faker $faker) {
    return [
        //
        'company_id' => 1,
        'sanction' => $faker->sentence,
        'content'  => $faker->text,
    ];
});
