<?php

namespace App\Patterns\Structure\CompositeEntity;

/**
 * Пример зависимого объекта
 */
class DependentObject1
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
