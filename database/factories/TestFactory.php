<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Test;

$factory->define(Test::class, function (Faker $faker) {
    return [
    	
    	'title'=> $faker->sentence(),
    	'description'=> $faker->text(100)
    ];
});
