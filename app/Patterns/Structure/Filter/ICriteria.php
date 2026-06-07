<?php

namespace App\Patterns\Structure\Filter;

/**
 * Объявляет критерии фильтрации
 */
interface ICriteria
{
    /**
     * Обрабатывает требования
     * @param array $laptops
     * @return array
     */
    public function meets(array $laptops): array;
}
