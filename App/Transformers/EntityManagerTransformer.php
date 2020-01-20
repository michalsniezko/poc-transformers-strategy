<?php

namespace App\Transformers;

use App\Factories\EntityResourceFactory;

class EntityManagerTransformer
{
    public function includeEntity(string $resourceCode, int $resourceId): array
    {
        $factory = new EntityResourceFactory($resourceCode);

        return $factory->getResource($resourceId);
    }
}