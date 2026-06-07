<?php

namespace App\Patterns\Structure\Broker;

/**
 * Определяет интерфейс для серверной части
 */
interface OperationsInterface
{
    /**
     * Добавляет числа
     * @param int $varOne Первое число
     * @param int $varTwo Второе число
     * @return int
     */
    public function addIntegers(int $varOne, int $varTwo): int;

    /**
     * Получить длину
     * @param string $str Строка
     * @return int
     */
    public function getLength(string $str): int;
}
