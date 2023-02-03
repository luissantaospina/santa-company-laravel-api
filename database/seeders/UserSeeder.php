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
                'nombre' => 'Jhon Doe',
                'rol_id' => 1
            ],
            [
                'email' => "cliente@aveonline.co",
                'password' =>  bcrypt('AVEOnline77'),
                'nombre' => 'Fernando Doe',
                'rol_id' => 2
            ],
            [
                'email' => "usuario@aveonline.co",
                'password' =>  bcrypt('AVEOnline77'),
                'nombre' => 'Luis Doe',
                'rol_id' => 3
            ],
        ];
        foreach ($users as $user) {
            User::updateOrCreate(['email' => $user['email']], $user);
        }
    }
}
