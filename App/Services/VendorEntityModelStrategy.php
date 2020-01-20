<?php
namespace App\Services;

use App\Interfaces\EntityGetByIdStrategyInterface;

class VendorEntityModelStrategy implements EntityGetByIdStrategyInterface
{
    public function getById($id): string
    {
        return 'Model of Vendor with ID ' . $id;
    }
}