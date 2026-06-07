<?php

namespace App\Patterns\Structure\BusinessDelegate;

/**
 * Интерфейс бизнес-сервиса
 */
interface BusinessService
{
    public function doProcessing(): void;
}
