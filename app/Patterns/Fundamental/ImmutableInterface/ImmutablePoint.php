<?php

namespace App\Patterns\Fundamental\ImmutableInterface;

use Carbon\Exceptions\UnknownMethodException;

class ImmutablePoint extends Point implements IImmutablePoint
{
    public function setX(int $x): void
    {
        throw new UnknownMethodException(__METHOD__);
    }

    public function setY(int $y): void
    {
        throw new UnknownMethodException(__METHOD__);
    }
}
