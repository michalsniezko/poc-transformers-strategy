<?php
namespace App\Interfaces;

interface EntityGetByIdStrategyInterface
{
    public function getById($id): string;
}