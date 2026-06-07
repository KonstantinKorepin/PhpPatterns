<?php

namespace App\Patterns\Behavioral\Specification;

/**
 * Спецификация отрицания
 */
class NotSpecification implements Specification
{
    public function __construct(private Specification $specification)
    {
    }

    public function isSatisfiedBy(Item $item): bool
    {
        return !$this->specification->isSatisfiedBy($item);
    }
}
