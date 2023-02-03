<?php

namespace App\Http\DataTransferObjects\Order;

use Spatie\LaravelData\Data;

class OrderData extends Data
{
    /**
     * @param int $cliente_id
     * @param string $codigo
     * @param float $precio
     * @param string $fecha_compra
     */
    public function __construct(
        public int $cliente_id,
        public string $codigo,
        public float $precio,
        public string $fecha_compra
    ) {}

    /**
     * @return array
     */
    public static function rules(): array
    {
        return [
            'cliente_id' => 'required|integer',
            'codigo' => 'required|string',
            'precio' => 'required|numeric',
            'fecha_compra' => 'required|string',
        ];
    }
}
