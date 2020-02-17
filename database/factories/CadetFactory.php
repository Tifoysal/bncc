<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cadet;
use Faker\Generator as Faker;

$factory->define(Cadet::class, function (Faker $faker) {
    return [
        'user_id'=>$faker->ean8,
        'name'=>$faker->name,
        'cdt_id'=>$faker->ean8,        
        'email'=>$faker->unique()->safeEmail,
        'mobile'=>$faker->e164PhoneNumber,
        'join'=>$faker->date,
        'left'=>$faker->date,
        'status'=>$faker->randomElement($array = array ('Active','Inactive')),
    ];
});
