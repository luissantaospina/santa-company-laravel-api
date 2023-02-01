<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'login' => 1,
                'clave' => 'clave',
                'nombre' => 'Luis',
                'rol_id' => 1
            ],
            [
                'login' => 2,
                'clave' => 'clave',
                'nombre' => 'Fernando',
                'rol_id' => 3
            ]
        ];
        foreach ($users as $user) {
            User::updateOrCreate(['nombre' => $user['nombre']], $user);
        }
    }
}
