<?php

namespace App\Http\Repositories\Product;

use App\Http\DataTransferObjects\Product\ProductData;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

interface ProductRepository
{
    /**
     * @param int $id
     * @return Product
     */
    public function findById(int $id): Product;

    /**
     * @param int $id
     * @return string
     */
    public function destroyById(int $id): string;

    /**
     * @return Collection
     */
    public function selectAll(): Collection;

    /**
     * @param ProductData $productData
     * @return Product
     */
    public function store(ProductData $productData): Product;

    /**
     * @param int $id
     * @param ProductData $productData
     * @return Product
     */
    public function updateById(int $id, ProductData $productData): Product;
}
