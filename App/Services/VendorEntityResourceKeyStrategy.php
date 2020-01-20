<?php
namespace App\Services;

use App\Interfaces\EntityResourceKeyStrategyInterface;

class VendorEntityResourceKeyStrategy implements EntityResourceKeyStrategyInterface
{
    public function getResourceKey(): string
    {
        return 'RESOURCE_KEY_VENDOR';
    }
}