<?php


namespace App\Http\Repositories\Product\Impl;

use App\Http\DataTransferObjects\Product\CreateProductData;
use App\Http\Repositories\Product\ProductRepository;
use App\Models\Product;

class ProductRepositoryImpl implements ProductRepository
{
    /**
     * @param int $id
     * @return Product
     */
    public function findById(int $id): Product
    {
        return 'hola';
    }

    /**
     * @param CreateProductData $createProductData
     * @return Product
     */
    public function store(CreateProductData $createProductData): Product
    {
        $product = new Product();
        $product->id = $createProductData->id;
        return $product;
    }
}
