<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Lecture::class, function (Faker $faker) {
    return [
        $array = ['Matematika', 'Lietuviu k.', 'Fizika', 'Istorija', 'Chemijia'];

        for($i = 0; $i < count($array); $i++){
        $lectures = new Lecture();
        $lectures->name = $array[$i];
        $lectures->description = "Tai $array[$i] pamoka";

        $lectures->save();
    };
    ];
});
