<?php

namespace App\Patterns\Structure\CompositeEntity;

/**
 * Реализует шаблон Составной объект
 */
class CompositeEntity
{
    /**
     * Объект общего назначения
     * @var CoarseGrainedObject
     */
    private CoarseGrainedObject $cgo;

    public function __construct()
    {
        $this->cgo = new CoarseGrainedObject();
        // тут можно использовать несколько независимых объектов общего назначения
    }

    /**
     * Устанавливает данные
     * @param string $data1 Параметры управляемых объектов
     * @param string $data2 Параметры управляемых объектов
     * @return void
     */
    public function setData(string $data1, string $data2): void
    {
        $this->cgo->setData($data1, $data2);
    }

    /**
     * Получить данные составного шаблона
     * @return array
     */
    public function getData(): array
    {
        return $this->cgo->getData();
    }
}
