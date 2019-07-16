<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Brand;
use Faker\Generator as Faker;

$factory->define(Brand::class, function (Faker $faker) {
    return [
			'name' => $faker->unique()->randomElement([
				'Samsung',
				'Adidas',
				'Apple',
				'Nike',
				'Coca-cola',
				'LG',
				'BMW',
				'Manaos',
				'Asus',
				'Digital House'
			]),
    ];
});
