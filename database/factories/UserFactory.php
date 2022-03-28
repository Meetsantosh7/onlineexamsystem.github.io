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

/*$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});*/


$factory->define(App\Match::class, function (Faker $faker) {
    return [
        'stage_id' =>rand(1,10),
        'team1_id'=>rand(1,10),
        'team2_id'=>rand(1,10),
        'goal_1'=>rand(1,10),
        'goal_2'=>rand(1,10),
        'status'=>rand(0,1),

    ];
});

$factory->define(App\Address::class, function (Faker $faker) {
    return [
        'address_name' =>str_random(10,20),

    ];
});

$factory->define(App\Card::class, function (Faker $faker) {
	$array=['red','yellow'];
	$randIndex = array_rand($array);
    return [
        'card_name' =>$array[$randIndex],

    ];
});

$factory->define(App\Official::class, function (Faker $faker) {
    return [
        
        'official_name' =>str_random(10),

    ];
});

$factory->define(App\Team::class, function (Faker $faker) {
    return [
        'team_name' =>str_random(10),

    ];
});

$factory->define(App\Stage::class, function (Faker $faker) {
    return [
        'stage_name' =>str_random(10),

    ];
});

