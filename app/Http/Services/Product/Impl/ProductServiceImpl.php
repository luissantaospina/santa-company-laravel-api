<?php

namespace App\Http\Services\Product\Impl;

use App\Http\DataTransferObjects\Product\ProductData;
use App\Http\Repositories\Product\ProductRepository;
use App\Http\Services\Product\ProductService;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Exception;

/**
 * Class ProductService
 * @package App\Http\Controllers\Product
 */
class ProductServiceImpl implements ProductService
{
    /**
     * @var ProductRepository
     */
    private ProductRepository $productRepository;

    /**
     * ProductServiceImpl constructor.
     * @param ProductRepository $productRepository
    */
    public function __construct(
        ProductRepository $productRepository
    )
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @return Collection
     */
    public function index(): Collection
    {
        return $this->productRepository->selectAll();
    }

    /**
     * @param int $id
     * @return string
     */
    public function destroy(int $id): string
    {
        return $this->productRepository->destroyById($id);
    }

    /**
     * @param int $id
     * @return Product
     */
    public function show(int $id): Product
    {
        return $this->productRepository->findById($id);
    }

    /**
     * @param ProductData $productData
     * @return Product
     * @throws Exception
     */
    public function store(ProductData $productData): Product
    {
        return $this->productRepository->store($productData);
    }

    /**
     * @param int $id
     * @param ProductData $productData
     * @return Product
     * @throws Exception
     */
    public function update(int $id, ProductData $productData): Product
    {
        return $this->productRepository->updateById($id, $productData);
    }
}
