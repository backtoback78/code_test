<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});



$factory->define(App\Question::class, function (Faker\Generator $faker) {

	$tab = ["published", "unpublished"];
	$rand = array_rand($tab, 1);
	
    return [
    	'categories_id' => rand(1,2),
    	'users_id' => $faker->users_id, // fait la liason entre nos users et les robots
        'title' => $faker->title,
        'abstract' => $faker->paragraph(rand(1,4)),
        'content' => $faker->paragraph(rand(1,4)),
        'published_at' => $faker->dateTime(),
        'status' => $tab[$rand]
        

    ];
});
