<?php
namespace App\Interfaces;

interface EntityResourceKeyStrategyInterface
{
    public function getResourceKey(): string;
}