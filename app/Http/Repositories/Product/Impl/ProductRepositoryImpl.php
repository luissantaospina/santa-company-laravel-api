<?php


namespace App\Http\Repositories\Product\Impl;

use App\Http\DataTransferObjects\Product\CreateProductData;
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
     * @param CreateProductData $createProductData
     * @return Product
     * @throws Exception
     */
    public function store(CreateProductData $createProductData): Product
    {
        DB::beginTransaction();
        try {
            $product = new Product();
            $product->fill((array)$createProductData);
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

