<?php

namespace App\Patterns\Structure\Filter;

/**
 * Критерий для лэптопов с 4 GB RAM
 */
class FourGBRam implements ICriteria
{
    public function meets(array $laptops): array
    {
        return array_filter($laptops, fn($item) => $item->getGb() == 4);
    }
}
