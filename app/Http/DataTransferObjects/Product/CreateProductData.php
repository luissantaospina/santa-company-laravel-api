<?php

namespace App\Http\DataTransferObjects\Product;

use Spatie\LaravelData\Data;

class CreateProductData extends Data
{
    /**
     * @param int $id
     */
    public function __construct(
        public int $id
    ) {}

    /**
     * @return array
     */
    public static function rules(): array
    {
        $integerRule = 'required|integer';
        return [
            'id' => $integerRule
        ];
    }
}
