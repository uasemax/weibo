<?php

use Faker\Generator as Faker;

$factory->define(App\Models\User::class, function (Faker $faker) {
	$date_time = $faker->date . ' ' . $faker->time;
	static $password;

	return [
		'name' => $faker->name,
		'email' => $faker->unique()->safeEmail,
		'is_admin' => false,
		'activated' => true,
		'password' => $password ?: $password=bcrypt('secret'), // secret
		'remember_token' => str_random(10),
		'created_at' => $date_time,
		'updated_at' => $date_time,
	];
});