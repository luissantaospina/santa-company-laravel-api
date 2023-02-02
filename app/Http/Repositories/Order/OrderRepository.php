<?php

namespace App\Http\Repositories\Order;

use App\Http\DataTransferObjects\Order\OrderData;
use App\Models\Order;
use Illuminate\Database\Eloquent\Collection;

interface OrderRepository
{
    /**
     * @param int $id
     * @return mixed
     */
    public function findById(int $id): mixed;

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
     * @param OrderData $orderData
     * @return Order
     */
    public function store(OrderData $orderData): Order;

    /**
     * @param int $id
     * @param OrderData $orderData
     * @return Order
     */
    public function updateById(int $id, OrderData $orderData): Order;
}
