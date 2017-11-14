<?php
use Faker\Generator as Faker;
$factory->define(App\Model\Review::class, function (Faker $faker) {
   

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
