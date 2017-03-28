<?php

use App\Card;
use App\User;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name'           => $faker->name,
        'email'          => $faker->unique()->safeEmail,
        'password'       => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Card::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Note::class, function (Faker\Generator $faker) {
    return [
        'body'    => $faker->sentence,
        'card_id' => factory(Card::class)->create()->id,
        'user_id' => factory(User::class)->create()->id,
    ];
});
