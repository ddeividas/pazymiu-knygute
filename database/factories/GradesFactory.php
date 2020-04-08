<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Grade;
use Faker\Generator as Faker;

$factory->define(Grade::class, function (Faker $faker) {
    return [
        'lectures_id' => factory('App\Lecture')->create()->id,
        'student_id' => factory('App\Student')->create()->id,
        'user_id' => 2,
        'grade' => Str::random(1, 10)
    ];
});
