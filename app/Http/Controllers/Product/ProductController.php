<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\DataTransferObjects\Product\CreateProductData;
use App\Http\Services\Product\ProductService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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
    public function destroy(int $id): JsonResponse
    {
        return response()->json($this->productService->destroy($id));
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json($this->productService->index());
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        return response()->json($this->productService->show($id));
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        return response()->json($this->productService->store(CreateProductData::from($request)), 201);
    }

    /**
     * @return JsonResponse
     */
    public function update(): JsonResponse
    {
    }
}
