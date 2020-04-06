<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();

        $user->name = "Deividas";
        $user->email = "deividas@gmail.com";
        $user->password = Hash::make('deividas');

        $user->save();
    }
}
