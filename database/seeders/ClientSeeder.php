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
                'login' => 1,
                'clave' => 'clave',
                'nombre' => 'Andres',
                'rol_id' => 2
            ],
            [
                'login' => 2,
                'clave' => 'clave',
                'nombre' => 'Tattiana',
                'rol_id' => 2
            ]
        ];
        foreach ($clients as $client) {
            Client::updateOrCreate(['nombre' => $client['nombre']], $client);
        }
    }
}
