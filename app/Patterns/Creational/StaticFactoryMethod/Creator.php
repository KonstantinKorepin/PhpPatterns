<?php

namespace App\Patterns\Creational\StaticFactoryMethod;

class Creator
{
    public function getTomorrow(): string
    {
        $product = TimeProductCreator::getTomorrow();
        return $product->getTime();
    }

    public function getToday(): string
    {
        $product = TimeProductCreator::getToday();
        return $product->getTime();
    }
}
