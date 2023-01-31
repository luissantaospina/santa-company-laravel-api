<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\DataTransferObjects\Product\CreateProductData;
use App\Http\Services\Product\ProductService;
use Illuminate\Http\JsonResponse;

/**
 * Class VpcController
 * @package App\Http\Controllers\Vpc
 */
class ProductController extends Controller
{
    /**
     * @var ProductService
     */
    private ProductService $productService;

    /**
     * VpcController constructor.
     * @param ProductService $productService
     */
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function index(int $id): JsonResponse
    {
        return response()->json($this->productService->index($id));
    }

    /**
     * @param CreateProductData $createProductData
     * @return JsonResponse
     */
    public function store(CreateProductData $createProductData): JsonResponse
    {
        return response()->json($this->productService->store($createProductData), 201);
    }
}
