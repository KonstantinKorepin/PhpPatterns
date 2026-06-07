<?php

namespace App\Patterns\Structure\Filter;

/**
 * Определяет интерфейс объекта
 */
interface ILaptop
{
    /**
     * Получить процессор
     * @return string
     */
    public function getProcessor(): string;

    /**
     * Получить объём памяти
     * @return int
     */
    public function getGb(): int;

    /**
     * Получить операционную систему
     * @return string
     */
    public function getOs(): string;
}
