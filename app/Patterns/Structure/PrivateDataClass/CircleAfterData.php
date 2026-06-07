<?php

namespace App\Patterns\Structure\PrivateDataClass;

class CircleAfterData
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
     * Объявляем методы для получения доступных свойств объекта
     * @return float
     */
    public function getRadius()
    {
        return $this->radius;
    }
}
