<?php

namespace App\Http\Services\Product;

use App\Http\DataTransferObjects\Product\CreateProductData;
use App\Models\Product;

interface ProductService
{
    /**
     * @param int $id
     * @return Product
     */
    public function index(int $id): Product;

    /**
     * @param CreateProductData $createProductData
     * @return Product
     */
    public function store(CreateProductData $createProductData): Product;
}
