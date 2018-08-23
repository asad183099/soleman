<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        //
        'name'=> $faker ->name,
        'price'=> $faker ->numberBetween(300,3000),
        'origin'=> $faker ->country,
        'discount'=> $faker ->numberBetween(5,25),
        'stock'=> $faker ->randomDigit,

    ];
});
