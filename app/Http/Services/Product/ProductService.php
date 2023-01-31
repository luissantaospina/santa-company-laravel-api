<?php

namespace App\Http\Services\Product;

use App\Http\DataTransferObjects\Product\CreateProductData;
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
     * @return Product
     */
    public function show(int $id): Product;

    /**
     * @param CreateProductData $createProductData
     * @return Product
     */
    public function store(CreateProductData $createProductData): Product;
}
