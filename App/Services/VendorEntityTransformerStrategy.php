<?php
namespace App\Services;

use App\Interfaces\EntityGetTransformerStrategyInterface;

class VendorEntityTransformerStrategy implements EntityGetTransformerStrategyInterface
{
    public function getTransformer(): string
    {
        return 'Vendor transformer';
    }
}