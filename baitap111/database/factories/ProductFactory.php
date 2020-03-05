<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => 'product' . Str::random(10), 
        'price' => 100000,
        'quantity' => 90,
        'description' => 'description'.Str::random(10),
        'expired' => '2019-01-01',
        'img' => ''
    ]
    ;
});
