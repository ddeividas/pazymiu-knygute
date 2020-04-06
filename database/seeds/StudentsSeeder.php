<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Student;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Student');

        for($i = 0; $i < 10; $i++){
            $student = new Student();
            $student->insert([
                'name' => $faker->firstName(),
                'surname' => $faker->lastName(),
                'email' => $faker->freeEmail(),
                'phone' => $faker->e164PhoneNumber(),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }

    }
}
