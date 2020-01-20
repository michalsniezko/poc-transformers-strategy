<?php
namespace App\Interfaces;

interface EntityServiceInterface
{
    public function getById(int $id): string;
    public function getTransformer(): string;
    public function getResourceKey(): string;
}