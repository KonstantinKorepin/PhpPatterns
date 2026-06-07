<?php

namespace App\Patterns\Structure\Decorator1;

// Базовый класс
class SimpleCoffee implements Coffee
{
    public function getCost(): int
    {
        return 10;
    }
    public function getDescription(): string
    {
        return 'Simple coffee';
    }
}
