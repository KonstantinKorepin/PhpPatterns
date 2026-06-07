<?php

namespace App\Patterns\Fundamental\ImmutableWrapper;

class ImmutableThird
{
    public function __construct(protected ImmutableThird $x)
    {
    }

    public function getX(): ImmutableThird
    {
        return $this->x;
    }
}
