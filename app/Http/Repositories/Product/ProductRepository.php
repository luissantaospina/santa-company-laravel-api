<?php

namespace App\Http\Repositories\Product;

use App\Http\DataTransferObjects\Product\CreateProductData;
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
     * @param CreateProductData $createProductData
     * @return Product
     */
    public function store(CreateProductData $createProductData): Product;
}
