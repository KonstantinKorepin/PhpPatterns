<?php

namespace App\Patterns\Structure\PrivateDataClass;

class CircleBefore
{
    /**
     * @param float $radius
     * @param string $color
     * @param int $point
     */
    public function __construct(
        private float $radius,
        private string $color,
        private int $point
    ) {}

    /**
     * Работа с приватными свойствами класса
     * @return float|int
     */
    public function getDiametr()
    {
        return 2 * $this->radius;
    }

}
