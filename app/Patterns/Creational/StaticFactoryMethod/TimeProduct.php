<?php

namespace App\Patterns\Creational\StaticFactoryMethod;

class TimeProduct implements ITimeProduct
{
    public function __construct(private int $time)
    {
    }

    public function getTime(): int
    {
        return $this->time;
    }
}
