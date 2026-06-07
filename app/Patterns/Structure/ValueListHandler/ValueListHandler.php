<?php

namespace App\Patterns\Structure\ValueListHandler;
use Iterator;

/**
 * Реализация общего класса обработчика значений
 *
 */
class ValueListHandler implements Iterator
{
    /**
     * Набор элементов
     *
     * @var array
     */
    private array $list;

    /**
     * Текущая позиция
     *
     * @var int
     */
    private int $position;

    /**
     * Возвращает список
     * @return array
     */
    public function getList(): array
    {
        return $this->list;
    }

    /**
     * Устанавливает список
     * @param array $list
     * @return void
     */
    public function setList(array $list): void
    {
        $this->list = $list;
    }

    /**
     * @return mixed
     */
    public function current(): mixed
    {
        return $this->list[$this->position];
    }

    /**
     * @return void
     */
    public function next(): void
    {
        ++$this->position;
    }

    /**
     * @return mixed
     */
    public function key(): mixed
    {
        return $this->position;
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        return isset($this->list[$this->position]);
    }

    /**
     * @return void
     */
    public function rewind(): void
    {
        $this->position = 0;
    }
}
