<?php

namespace App\Patterns\Structure\PipesAndFilter;

/**
 * Плечики
 */
class Shoulder implements Process
{
    public function process(): void
    {
        echo 'Shoulder process...' . PHP_EOL;
    }
}
