<?php

namespace App\Patterns\Structure\ValueObject;

class StudentVO
{
    /**
     * Имя студена
     * @var string
     */
    private string $name;

    /**
     * Номер студента
     * @var int
     */
    private int $rollNo;

    public function __construct(string $name, int $rollNo)
    {
        $this->name = $name;
        $this->rollNo = $rollNo;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getRollNo(): int
    {
        return $this->rollNo;
    }

    public function setRollNo(int $rollNo): void
    {
        $this->rollNo = $rollNo;
    }
}
