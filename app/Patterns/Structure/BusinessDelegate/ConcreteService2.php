<?php

namespace App\Patterns\Structure\BusinessDelegate;

/**
 * Реализуем конкретный сервис
 */
class ConcreteService2 implements BusinessService
{
    public function doProcessing(): void
    {
        echo 'Processing task by invoking ConcreteService2' . PHP_EOL;
    }
}
