<?php

namespace App\Patterns\Fundamental\ImmutableWrapper;

class Mutant extends ImmutableThird
{
    public function __construct(private int $y = 0)
    {
    }
    public function getX(): self
    {
        return new self(rand(1, 1000000));
    }
}
