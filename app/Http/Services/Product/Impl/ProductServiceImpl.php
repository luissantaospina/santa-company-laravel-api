<?php

namespace App\Http\Services\Product\Impl;

use App\Http\DataTransferObjects\Product\CreateProductData;
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
        return $this->productRepository->findAll();
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
     * @param CreateProductData $createProductData
     * @return Product
     * @throws Exception
     */
    public function store(CreateProductData $createProductData): Product
    {
        return $this->productRepository->store($createProductData);
    }
}
