<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(laravel_tdd\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(laravel_tdd\Post::class, function (Faker $faker) {
	return [
        'user_id' => function(){
            return factory('laravel_tdd\User')->create()->id;
        },
        'title' => $faker->sentence,
        'body' => $faker->paragraph
    ];
});

$factory->define(laravel_tdd\Comment::class, function (Faker $faker) {
	return [
	        'user_id' => function(){
	            return factory('laravel_tdd\User')->create()->id;
	        },
	        'post_id' => function(){
	            return factory('laravel_tdd\Post')->create()->id;
	        },
	        'body' => $faker->paragraph
	    ];
});