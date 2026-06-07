<?php

namespace App\Patterns\Fundamental\ImmutableWrapper;

class MutableX
{
    protected int $x;
    protected int $y;

    public function getX(): int
    {
        return $this->x;
    }

    public function setX(int $x): void
    {
        $this->x = $x;
    }

    public function setY(int $y): void
    {
        $this->y = $y;
    }
}
