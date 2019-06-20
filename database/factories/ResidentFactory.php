<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Resident;
use Faker\Generator as Faker;

$factory->define(Resident::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' =>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' ,
        'remember_token' => Str::random(10),
        'residency_number' => '4',
        'residency_code' => '25',
        'document' => '6'
    ];
});
