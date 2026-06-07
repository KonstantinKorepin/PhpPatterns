<?php

namespace App\Patterns\Fundamental\ImmutableObject;

class Money
{
    public function __construct(private float $amount)
    {
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function add(float $amount): self
    {
        $this->amount += $amount;
        return $this;
    }
}
