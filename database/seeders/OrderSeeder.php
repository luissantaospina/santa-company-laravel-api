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
                'code' => "EDG657",
                'price' => 145454557,
                'client_id' => 1,
                'date_purchase' => "2022-05-18 11:58:54",
            ],
            [
                'code' => "KJU789",
                'price' => 1452143257,
                'client_id' => 1,
                'date_purchase' => "2022-05-18 11:58:54",
            ],
            [
                'code' => "KLJ890",
                'price' => 12312354557,
                'client_id' => 1,
                'date_purchase' => "2022-05-18 11:58:54",
            ],
        ];
        foreach ($orders as $order) {
            Order::updateOrCreate(['code' => $order['code']], $order);
        }
    }
}
