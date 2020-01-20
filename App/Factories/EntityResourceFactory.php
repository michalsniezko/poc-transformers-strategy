<?php
namespace App\Factories;

use App\Services\EntityVendorService;

class EntityResourceFactory
{
    private $code;

    public function __construct(string $code)
    {
        $this->code = $code;
    }

    public function getResource(int $id): array
    {
        switch ($this->code) {
            case 'vendor':
                $service = new EntityVendorService();
        }

        return [
            'resource' => $service->getById($id),
            'transformer' => $service->getTransformer(),
            'resourceKey' => $service->getResourceKey(),
        ];
    }
}