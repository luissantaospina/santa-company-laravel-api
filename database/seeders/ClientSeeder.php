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
                'email' => "clientecarulla@empresa.co",
                'password' => 'password',
                'name' => 'Andres',
                'role_id' => 2
            ],
            [
                'email' => "clienteexito@empresa.co",
                'password' => 'password',
                'name' => 'Tatiana',
                'role_id' => 2
            ]
        ];
        foreach ($clients as $client) {
            Client::updateOrCreate(['email' => $client['email']], $client);
        }
    }
}
