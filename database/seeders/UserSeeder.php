<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'email' => "administrador@aveonline.co",
                'password' => bcrypt('AVEOnline77'),
                'name' => 'Jhon Doe',
                'role_id' => 1
            ],
            [
                'email' => "cliente@aveonline.co",
                'password' =>  bcrypt('AVEOnline77'),
                'name' => 'Fernando Doe',
                'role_id' => 2
            ],
            [
                'email' => "usuario@aveonline.co",
                'password' =>  bcrypt('AVEOnline77'),
                'name' => 'Luis Doe',
                'role_id' => 3
            ],
        ];
        foreach ($users as $user) {
            User::updateOrCreate(['email' => $user['email']], $user);
        }
    }
}
