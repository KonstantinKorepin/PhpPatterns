<?php

namespace App\Patterns\Fundamental\ImmutableWrapper;

class ImmutableRight
{
    public function __construct(protected MutableX $x)
    {
    }
    public function getX(): int
    {
        return $this->x->getX();
    }
}
