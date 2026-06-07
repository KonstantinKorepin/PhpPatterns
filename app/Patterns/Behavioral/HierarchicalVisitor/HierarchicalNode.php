<?php

namespace App\Patterns\Behavioral\HierarchicalVisitor;

/**
 * CompositeElement (HierarchicalNode): элемент, который может содержать дочерние элементы: CompositeElement
 * Он реализует метод accept(), чтобы посетитель мог выполнить с ним операцию. Это также заставляет
 * посетителя, чтобы их можно было посещать и обрабатывать.
 */
class HierarchicalNode extends Employee
{
    /**
     * Список подчиненных
     */
    private array $subordinates;

    public function __construct(string $name, int $salary)
    {
        parent::__construct($name, $salary);
    }

    /**
     * Устанавливает подчиненных
     * @param array $subordinates
     * @return void
     */
    public function setSubordinate(array $subordinates): void
    {
        $this->subordinates = $subordinates;
    }

    /**
     * @param IHierarchicalVisitor $v
     * @return bool
     */
    public function accept(IHierarchicalVisitor $v): bool
    {
        if ($v->visitEnter($this)) {
            if ($this->subordinates != null) {
                foreach ($this->subordinates as $employee) {
                    $collectedAll = $employee->accept($v);
                    if ($collectedAll) {
                        break;
                    }
                }
            }
        }
        return $v->visitExit($this);
    }
}
