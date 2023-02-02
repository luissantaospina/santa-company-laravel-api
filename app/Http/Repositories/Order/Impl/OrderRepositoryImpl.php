<?php


namespace App\Http\Repositories\Order\Impl;

use App\Http\DataTransferObjects\Order\OrderData;
use App\Http\Repositories\Order\OrderRepository;
use App\Models\Order;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OrderRepositoryImpl implements OrderRepository
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
            Order::destroy($id);
            DB::commit();
        } catch (Exception $exception) {
            DB::rollback();
            Log::error($exception->getMessage());
            throw $exception;
        }
        return 'La orden ha sido eliminado exitosamente';
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function findById(int $id): mixed
    {
        return Order::where('id', $id)->with('client')->first();
    }

    /**
     * @return Collection
     */
    public function selectAll(): Collection
    {
        return Order::with('client')->get();
    }

    /**
     * @param OrderData $orderData
     * @return Order
     * @throws Exception
     */
    public function store(OrderData $orderData): Order
    {
        DB::beginTransaction();
        try {
            $order = new Order();
            $order->fill((array)$orderData);
            $order->save();
            DB::commit();
        } catch (Exception $exception) {
            DB::rollback();
            Log::error($exception->getMessage());
            throw $exception;
        }
        return $order;
    }

    /**
     * @param int $id
     * @param OrderData $orderData
     * @return Order
     * @throws Exception
     */
    public function updateById(int $id, OrderData $orderData): Order
    {
        DB::beginTransaction();
        try {
            $order = Order::findOrFail($id);
            $order->fill((array)$orderData);
            $order->save();
            DB::commit();
        } catch (Exception $exception) {
            DB::rollback();
            Log::error($exception->getMessage());
            throw $exception;
        }
        return $order;
    }
}

