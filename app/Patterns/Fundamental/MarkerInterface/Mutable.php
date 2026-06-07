<?php

namespace App\Patterns\Fundamental\MarkerInterface;

class Mutable implements IMutable
{
    public function __construct(private ?int $x = null)
    {
    }

    public function getX(): ?int
    {
        return $this->x;
    }

    public function setX(?int $x): void
    {
        $this->x = $x;
    }
}
