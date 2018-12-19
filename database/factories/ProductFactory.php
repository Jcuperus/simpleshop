<?php

use Faker\Generator as Faker;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'price' => $faker->numberBetween(0.01, 9999),
        'stock' => $faker->numberBetween(10, 1000)
    ];
});
