<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Shoe;
use App\Category;
use App\Brand;
use App\Type;
use Faker\Generator as Faker;

$factory->define(Shoe::class, function (Faker $faker) {
    $categories = Category::all()->pluck('id')->toArray();
    $brands = Brand::all()->pluck('id')->toArray();
    $types = Type::all()->pluck('id')->toArray();
    return [
        'name' => $faker->sentence(2),
        'brand_id' => $faker->randomElement($brands),
        'type_id' => $faker->randomElement($types),
        'category_id' => $faker->randomElement($categories),
        'picture' => $faker->randomElement([
            '1.jpg',
            '2.jpg',
            '3.jpg',
            '4.jpg',
            '5.jpg',
            '6.jpg',
            '7.jpg',
        ])
    ];
});
