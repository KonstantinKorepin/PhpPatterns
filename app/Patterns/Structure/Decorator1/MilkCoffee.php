<?php

namespace App\Patterns\Structure\Decorator1;

class MilkCoffee implements Coffee
{
    protected Coffee $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost(): int
    {
        return $this->coffee->getCost() + 2;
    }

    public function getDescription(): string
    {
        return $this->coffee->getDescription() . ', milk';
    }
}
