<?php

namespace App\Patterns\Structure\Broker;

/**
 * Класс сервера
 */
class Server implements OperationsInterface
{
    public function addIntegers(int $varOne, int $varTwo): int
    {
        return $varOne + $varTwo;
    }

    public function getLength(string $str): int
    {
        return strlen($str);
    }
}
