<?php

namespace App\Patterns\Structure\CompositeEntity;

/**
 * Пример второго зависимого объекта
 */
class DependentObject2
{
    /**
     * Данные
     * @var string
     */
    private string $data;

    /**
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * @param string $data
     * @return void
     */
    public function setData(string $data): void
    {
        $this->data = $data;
    }
}
