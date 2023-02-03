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
                'cliente_id' => 1,
                'fecha_compra' => "2022-05-18 11:58:54",
            ],
            [
                'codigo' => "KJU789",
                'precio' => 1452143257,
                'cliente_id' => 1,
                'fecha_compra' => "2022-05-18 11:58:54",
            ],
            [
                'codigo' => "KLJ890",
                'precio' => 12312354557,
                'cliente_id' => 1,
                'fecha_compra' => "2022-05-18 11:58:54",
            ],
        ];
        foreach ($orders as $order) {
            Order::updateOrCreate(['codigo' => $order['codigo']], $order);
        }
    }
}
