<?php

use \Faker\Generator as Faker;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'price' => $faker->randomFloat(0.01, 9999),
        'stock' => $faker->numberBetween(10, 1000)
    ];
});
