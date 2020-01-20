<?php

use App\Transformers\EntityManagerTransformer;

require "vendor/autoload.php";

$transformer = new EntityManagerTransformer();

print_r($transformer->includeEntity('vendor', 1));