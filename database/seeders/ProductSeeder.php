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
                'esta_activo' => 1,
                'cantidad' => 12,
                'categoria' => 'Alimentos',
                'codigo' => 'ALI123',
                'descripcion' => 'Endulzante',
                'nombre' => 'Panela',
                'precio' => 12000
            ],
            [
                'esta_activo' => 1,
                'cantidad' => 89,
                'categoria' => 'Aseo',
                'codigo' => 'ASE123',
                'descripcion' => 'Casa',
                'nombre' => 'Jabon',
                'precio' => 42000
            ]
        ];
        foreach ($products as $product) {
            Product::updateOrCreate(['nombre' => $product['nombre']], $product);
        }
    }
}
