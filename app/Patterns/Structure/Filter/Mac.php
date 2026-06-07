<?php

namespace App\Patterns\Structure\Filter;

class Mac implements ICriteria
{
    public function meets(array $laptops): array
    {
        return array_filter($laptops, fn($item) => $item->getOs() == 'MAC');
    }
}
