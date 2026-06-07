<?php

namespace App\Patterns\Structure\Dao;

/**
 * Конкретный объект-значение
 */
class Student
{
    /**
     * Имя объекта
     * @var string
     */
    private string $name;

    /**
     * Свойство объекта значения
     * @var int
     */
    private int $no;

    public function __construct(string $name, int $rollNo)
    {
        $this->name = $name;
        $this->no = $rollNo;
    }

    /**
     * Возвращает наименование
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Установить наименование
     * @param string $name
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Возвращает номер студента
     * @return int
     */
    public function getRollNo(): int
    {
        return $this->no;
    }

    /**
     * Устанавливает номер студента
     * @param int $no
     * @return void
     */
    public function setRollNo(int $no): void
    {
        $this->no = $no;
    }
}
