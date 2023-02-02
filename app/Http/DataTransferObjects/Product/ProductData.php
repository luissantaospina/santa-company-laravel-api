<?php

namespace App\Http\DataTransferObjects\Product;

use Spatie\LaravelData\Data;

class ProductData extends Data
{
    /**
     * @param int $cantidad
     * @param string $categoria
     * @param string $codigo
     * @param string $descripcion
     * @param string $nombre
     * @param float $precio
     */
    public function __construct(
        public int $cantidad,
        public string $categoria,
        public string $codigo,
        public string $descripcion,
        public string $nombre,
        public float $precio
    ) {}

    /**
     * @return array
     */
    public static function rules(): array
    {
        $integerRule = 'required|integer';
        $floatRule = 'required|numeric';
        $stringRule = 'required|string';
        return [
            'cantidad' => $integerRule,
            'categoria' => $stringRule,
            'codigo' => $stringRule,
            'descripcion' => $stringRule,
            'nombre' => $stringRule,
            'precio' => $floatRule
        ];
    }
}
