<?php

namespace App\Patterns\Behavioral\Servant;

/**
 * Класс текущей позиции
 */
class Position
{
    /**
     * Позиция x
     *
     * @var int
     */
    public int $xPosition;

    /**
     * Позиция y
     *
     * @var int
     */
    public int $yPosition;

    /**
     * @param int $x
     * @param int $y
     */
    public function __construct(int $x, int $y)
    {
        $this->xPosition = $x;
        $this->yPosition = $y;
    }
}
