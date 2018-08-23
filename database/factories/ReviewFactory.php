<?php

use Faker\Generator as Faker;
use App\Model\Product;

$factory->define(App\Model\Review::class, function (Faker $faker) {
    return [
        'product_id'=> Product::all()->random(),
        'customerName' => $faker->name,
        'review' => $faker->paragraph,
        'star' => $faker->numberBetween(1,5)
    ];
});
