<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;


class ClientSeeder extends Seeder
{
    public function run()
    {
        $clients = [
            [
                'login' => "clientecarulla@empresa.co",
                'clave' => 'clave',
                'nombre' => 'Andres',
                'rol_id' => 2
            ],
            [
                'login' => "clienteexito@empresa.co",
                'clave' => 'clave',
                'nombre' => 'Tatiana',
                'rol_id' => 2
            ]
        ];
        foreach ($clients as $client) {
            Client::updateOrCreate(['login' => $client['login']], $client);
        }
    }
}
