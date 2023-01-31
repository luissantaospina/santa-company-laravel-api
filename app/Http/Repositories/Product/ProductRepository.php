<?php

namespace App\Http\Repositories\Product;

use App\Http\DataTransferObjects\Product\CreateProductData;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

interface ProductRepository
{
    /**
     * @return Collection
     */
    public function findAll(): Collection;

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
