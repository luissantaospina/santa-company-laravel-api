<?php

namespace App\Http\Services\Product;

use App\Http\DataTransferObjects\Product\ProductData;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

interface ProductService
{
    /**
     * @return Collection
     */
    public function index(): Collection;

    /**
     * @param int $id
     * @return string
     */
    public function destroy(int $id): string;

    /**
     * @param int $id
     * @return Product
     */
    public function show(int $id): Product;

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
    public function update(int $id, ProductData $productData): Product;
}
