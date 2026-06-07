<?php

namespace App\Patterns\Fundamental\Interface;

class Cart
{
    private array $products = [];

    public function setProduct(Product $product): void
    {
        $this->products[] = $product;
    }

    public function printListOfProducts(): void
    {
        foreach ($this->products as $product) {
            echo $product->getName() . PHP_EOL;
        }
    }
}
