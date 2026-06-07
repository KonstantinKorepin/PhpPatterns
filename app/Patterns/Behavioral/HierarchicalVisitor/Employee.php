<?php

namespace App\Patterns\Behavioral\HierarchicalVisitor;

/**
 * Element (Employee): общая основа для CompositeElement
 * и LeafElement. Интерфейс / класс, определяющий сотрудника.
 */
abstract class Employee
{
    /**
     * Имя
     * @var string
     */
    private string $name;

    /**
     * Зарплата
     * @var int
     */
    private int $salary;

    public function __construct(string $name, int $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }

    public abstract function accept(IHierarchicalVisitor $v): bool;
}
