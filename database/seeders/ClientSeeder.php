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
        foreach ($clients as $client) {
            Client::updateOrCreate(['nombre' => $client['nombre']], $client);
        }
    }
}
