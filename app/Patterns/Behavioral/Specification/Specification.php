<?php

namespace App\Patterns\Behavioral\Specification;

/**
 * Интерфейс спецификации, определяет методы для проверки соответствий объектов
 */
interface Specification
{
    public function isSatisfiedBy(Item $item): bool;
}
