<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Puo;
use Faker\Generator as Faker;

$factory->define(Puo::class, function (Faker $faker) {
    return [
        'user_id'=>$faker->ean8,
        'puo_id'=>$faker->ean8,
        'name'=>$faker->name,
        'mobile'=>$faker->e164PhoneNumber,
        'email'=>$faker->unique()->safeEmail,
        'rank'=>$faker->randomElement($array = array ('Sergent','Colonel','Major')),
        'role'=>$faker->randomElement($array = array ('PUO','Stuff')),
        'join'=>$faker->date,
        'left'=>$faker->date,
        'status'=>$faker->randomElement($array = array ('Active','Inactive')),
        'gender'=>$faker->randomElement($array = array ('male','female')),
    ];
});

//Tutorial links
//https://laravel.com/docs/6.x/database-testing#writing-factories
//https://github.com/fzaninotto/Faker#basic-usage