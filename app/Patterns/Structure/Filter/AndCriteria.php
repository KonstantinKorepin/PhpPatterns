<?php

namespace App\Patterns\Structure\Filter;

class AndCriteria implements ICriteria
{
    /**
     * Набор выставленных критериев
     * @var array
     */
    private array $criteria = [];

    /**
     * Добавляет условие И для критериев
     */
    public function __construct(array $criteria)
    {
        $this->criteria = $criteria;
    }

    public function meets(array $laptops): array
    {
        foreach ($this->criteria as $criterion) {
            $laptops = $criterion->meets($laptops);
        }
        return array_values($laptops);
    }
}
