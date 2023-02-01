<?php


namespace App\Http\Repositories\Product\Impl;

use App\Http\DataTransferObjects\Product\ProductData;
use App\Http\Repositories\Product\ProductRepository;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

class ProductRepositoryImpl implements ProductRepository
{
    /**
     * @param int $id
     * @return string
     * @throws Exception
     */
    public function destroyById(int $id): string
    {
        DB::beginTransaction();
        try {
            Product::destroy($id);
            DB::commit();
        } catch (Exception $exception) {
            DB::rollback();
            Log::error($exception->getMessage());
            throw $exception;
        }
        return 'El producto ha sido eliminado exitosamente';
    }

    /**
     * @param int $id
     * @return Product
     */
    public function findById(int $id): Product
    {
        return Product::findOrFail($id);
    }

    /**
     * @return Collection
     */
    public function selectAll(): Collection
    {
        return Product::all();
    }

    /**
     * @param ProductData $productData
     * @return Product
     * @throws Exception
     */
    public function store(ProductData $productData): Product
    {
        DB::beginTransaction();
        try {
            $product = new Product();
            $product->fill((array)$productData);
            $product->save();
            DB::commit();
        } catch (Exception $exception) {
            DB::rollback();
            Log::error($exception->getMessage());
            throw $exception;
        }
        return $product;
    }

    /**
     * @param int $id
     * @param ProductData $productData
     * @return Product
     * @throws Exception
     */
    public function updateById(int $id, ProductData $productData): Product
    {
        DB::beginTransaction();
        try {
            $product = Product::findOrFail($id);
            $product->fill((array)$productData);
            $product->save();
            DB::commit();
        } catch (Exception $exception) {
            DB::rollback();
            Log::error($exception->getMessage());
            throw $exception;
        }
        return $product;
    }
}

