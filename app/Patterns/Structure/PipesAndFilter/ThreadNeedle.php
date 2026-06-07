<?php

namespace App\Patterns\Structure\PipesAndFilter;

/**
 * Иголки
 */
class ThreadNeedle implements Process
{
    public function process(): void
    {
        echo 'ThreadNeedle process...' . PHP_EOL;
    }
}
