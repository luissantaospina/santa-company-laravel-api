<?php

namespace App\Http\Services\Order\Impl;

use App\Http\DataTransferObjects\Order\OrderData;
use App\Http\Repositories\Order\OrderRepository;
use App\Http\Services\Order\OrderService;
use App\Models\Order;
use Exception;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class OrderService
 * @package App\Http\Controllers\Order
 */
class OrderServiceImpl implements OrderService
{
    /**
     * @var OrderRepository
     */
    private OrderRepository $orderRepository;

    /**
     * OrderServiceImpl constructor.
     * @param OrderRepository $orderRepository
    */
    public function __construct(
        OrderRepository $orderRepository
    )
    {
        $this->orderRepository = $orderRepository;
    }

    /**
     * @return Collection
     */
    public function index(): Collection
    {
        return $this->orderRepository->selectAll();
    }

    /**
     * @param int $id
     * @return string
     */
    public function destroy(int $id): string
    {
        return $this->orderRepository->destroyById($id);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function show(int $id): mixed
    {
        return $this->orderRepository->findById($id);
    }

    /**
     * @param OrderData $orderData
     * @return Order
     * @throws Exception
     */
    public function store(OrderData $orderData): Order
    {
        return $this->orderRepository->store($orderData);
    }

    /**
     * @param int $id
     * @param OrderData $orderData
     * @return Order
     * @throws Exception
     */
    public function update(int $id, OrderData $orderData): Order
    {
        return $this->orderRepository->updateById($id, $orderData);
    }
}
