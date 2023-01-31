<?php


namespace App\Http\Repositories\Product\Impl;

use App\Http\DataTransferObjects\Product\CreateProductData;
use App\Http\Repositories\Product\ProductRepository;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductRepositoryImpl implements ProductRepository
{
    /**
     * @return Collection
     */
    public function findAll(): Collection
    {
        return Product::all();
    }

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
        $product->fill(json_decode(json_encode($createProductData, JSON_FORCE_OBJECT)));
        return $product;
    }
}
