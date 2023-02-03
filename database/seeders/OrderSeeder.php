<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;


class OrderSeeder extends Seeder
{
    public function run()
    {
        $orders = [
            [
                'codigo' => "EDG657",
                'precio' => 145454557,
                'cliente_id' => 1
            ],
            [
                'codigo' => "KJU789",
                'precio' => 1452143257,
                'cliente_id' => 1
            ],
            [
                'codigo' => "KLJ890",
                'precio' => 12312354557,
                'cliente_id' => 1
            ],
        ];
        foreach ($orders as $order) {
            Order::updateOrCreate(['codigo' => $order['codigo']], $order);
        }
    }
}
