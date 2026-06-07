<?php

namespace App\Patterns\Fundamental\Interface;

class InterfacePattern
{
    /**
     * @param string $additionalProduct
     * @return void
     */
    static function orderAllProducts(string $additionalProduct): void
    {
        $currentProducts = [
            'product_1',
            'product_2',
            'product_3',
            'product_4',
            $additionalProduct
        ];

        $cart = new Cart();
        foreach ($currentProducts as $productName) {
            $product = new Product();
            $product->setName($productName);
            $cart->setProduct($product);
        }

        $cart->printListOfProducts();
    }
}
