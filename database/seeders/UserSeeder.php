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
                'login' => 1,
                'clave' => 432143,
                'nombre' => 'Luis',
                'rol' => 2
            ],
            [
                'login' => 1,
                'clave' => 765876,
                'nombre' => 'Fernando',
                'rol' => 3
            ],
        ];
        foreach ($users as $user) {
            User::updateOrCreate(['nombre' => $user['nombre']], $user);
        }
    }
}
