<?php

namespace App\Patterns\Structure\Filter;

class I7Processor implements ICriteria
{
    public function meets(array $laptops): array
    {
        return array_filter($laptops, fn($item) => $item->getProcessor() == 'i7');
    }
}
