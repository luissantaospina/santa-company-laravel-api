<?php

namespace App\Http\Repositories\Product;

use App\Http\DataTransferObjects\Product\CreateProductData;
use App\Models\Product;

interface ProductRepository
{
    /**
     * @param int $id
     * @return Product
     */
    public function findById(int $id): Product;

    /**
     * @param CreateProductData $createProductData
     * @return Product
     */
    public function store(CreateProductData $createProductData): Product;
}
