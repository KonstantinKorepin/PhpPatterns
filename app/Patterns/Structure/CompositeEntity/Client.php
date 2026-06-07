<?php

namespace App\Patterns\Structure\CompositeEntity;

/**
 * Класс клиента, который использует составной объект
 */
class Client
{
    /**
     * Составной объект
     * @var CompositeEntity
     */
    private CompositeEntity $compositeEntity;

    public function __construct()
    {
        $this->compositeEntity = new CompositeEntity();
    }

    /**
     * Вывести элементы составного объекта
     * @return void
     */
    public function printData(): void
    {
        foreach ($this->compositeEntity->getData() as $field) {
            echo $field . PHP_EOL;
        }
    }

    /**
     * Установить элементы составного объекта
     * @param string $data1
     * @param string $data2
     * @return void
     */
    public function setData(string $data1, string $data2): void
    {
        $this->compositeEntity->setData($data1, $data2);
    }
}
