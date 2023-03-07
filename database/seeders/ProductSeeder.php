<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;


class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'is_active' => 1,
                'amount' => 12,
                'category' => 'Alimentos',
                'code' => 'ALI123',
                'description' => 'Endulzante',
                'name' => 'Panela',
                'price' => 12000
            ],
            [
                'is_active' => 1,
                'amount' => 89,
                'category' => 'Aseo',
                'code' => 'ASE123',
                'description' => 'Casa',
                'name' => 'Jabon',
                'price' => 42000
            ]
        ];
        foreach ($products as $product) {
            Product::updateOrCreate(['name' => $product['name']], $product);
        }
    }
}
