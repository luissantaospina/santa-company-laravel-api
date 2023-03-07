<?php

namespace App\Http\DataTransferObjects\Order;

use Spatie\LaravelData\Data;

class OrderData extends Data
{
    /**
     * @param int $client_id
     * @param string $code
     * @param float $price
     * @param string $date_purchase
     */
    public function __construct(
        public int $client_id,
        public string $code,
        public float $price,
        public string $date_purchase
    ) {}

    /**
     * @return array
     */
    public static function rules(): array
    {
        return [
            'client_id' => 'required|integer',
            'code' => 'required|string',
            'price' => 'required|numeric',
            'date_purchase' => 'required|string',
        ];
    }
}
