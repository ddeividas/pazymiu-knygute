<?php

use Illuminate\Database\Seeder;
use App\Lecture;

class LecturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $array = ['Matematika', 'Lietuviu k.', 'Fizika', 'Istorija', 'Chemijia'];

        for($i = 0; $i < count($array); $i++){
            $lectures = new Lecture();
            $lectures->name = $array[$i];
            $lectures->description = "Tai $array[$i] pamoka";

            $lectures->save();
        }
    }
}
