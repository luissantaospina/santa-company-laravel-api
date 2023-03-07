<?php

namespace App\Http\DataTransferObjects\Product;

use Spatie\LaravelData\Data;

class ProductData extends Data
{
    /**
     * @param int $amount
     * @param string $category
     * @param string $code
     * @param string $description
     * @param string $name
     * @param float $price
     */
    public function __construct(
        public int $amount,
        public string $category,
        public string $code,
        public string $description,
        public string $name,
        public float $price
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
            'amount' => $integerRule,
            'category' => $stringRule,
            'code' => $stringRule,
            'description' => $stringRule,
            'name' => $stringRule,
            'price' => $floatRule
        ];
    }
}
