<?php

namespace App\Patterns\Fundamental\ImmutableObject;

final class ImmutableMoney
{
    public function __construct(private float $amount)
    {
    }

    final public function getAmount(): float
    {
        return $this->amount;
    }

    final public function add(float $amount): self
    {
        return new self($this->amount + $amount);
    }
}
