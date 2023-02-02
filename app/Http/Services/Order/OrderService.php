<?php

namespace App\Http\Services\Order;

use App\Http\DataTransferObjects\Order\OrderData;
use App\Models\Order;
use Illuminate\Database\Eloquent\Collection;

interface OrderService
{
    /**
     * @return Collection
     */
    public function index(): Collection;

    /**
     * @param int $id
     * @return string
     */
    public function destroy(int $id): string;

    /**
     * @param int $id
     * @return mixed
     */
    public function show(int $id): mixed;

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
    public function update(int $id, OrderData $orderData): Order;
}
