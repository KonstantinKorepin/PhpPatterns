<?php

namespace App\Patterns\Structure\BusinessDelegate;

/**
 * Реализуем конкретный сервис
 */
class ConcreteService1 implements BusinessService
{
    public function doProcessing(): void
    {
        echo 'Processing task by invoking ConcreteService1' . PHP_EOL;
    }
}
