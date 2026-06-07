<?php

namespace App\Patterns\Structure\PrivateDataClass;

class CircleAfter
{
    /**
     * Экземпляр приватного дата-класса
     * @var CircleAfterData
     */
    private CircleAfterData $data;

    public function __construct(
        float $radius,
        string $color,
        int $point
    )
    {
        $this->data = new CircleAfterData($radius, $color, $point);
    }

    /**
     * Метод, работает с дата-классом
     * @return float|int
     */
    public function getDiametr()
    {
        return 2 * $this->data->getRadius();
    }
}
