<?php
namespace App\Services;

use App\Interfaces\EntityServiceInterface;

class EntityVendorService implements EntityServiceInterface
{
    private $entityModelStrategy;
    private $entityTransformerStrategy;
    private $resourceKeyStrategy;

    public function __construct()
    {
        $this->entityModelStrategy = new VendorEntityModelStrategy();
        $this->entityTransformerStrategy = new VendorEntityTransformerStrategy();
        $this->resourceKeyStrategy = new VendorEntityResourceKeyStrategy();
    }

    public function getById(int $id): string
    {
        return $this->entityModelStrategy->getById($id);
    }

    public function getTransformer(): string
    {
        return $this->entityTransformerStrategy->getTransformer();
    }

    public function getResourceKey(): string
    {
        return $this->resourceKeyStrategy->getResourceKey();
    }
}