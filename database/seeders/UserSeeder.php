<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['name'=>'Belqis','email'=>'belqis@mail.com','password'=>bcrypt('12345678')],
            ['name'=>'Alya','email'=>'alya@mail.com','password'=>bcrypt('12345678')],
            ['name'=>'Lia','email'=>'lia@mail.com','password'=>bcrypt('12345678')],
            ['name'=>'Lyra','email'=>'lyra@mail.com','password'=>bcrypt('12345678')],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
