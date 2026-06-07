<?php

namespace App\Patterns\Structure\PipesAndFilter;

/**
 * Гладка
 */
class Iron implements Process
{
    public function process(): void
    {
        echo 'Iron process...' . PHP_EOL;
    }
}
