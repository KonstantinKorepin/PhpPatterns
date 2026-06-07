<?php

namespace App\Patterns\Fundamental\ImmutableWrapper;

class Immutable
{
    protected $x;

    public function __construct($x)
    {
        $this->x = $x;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }
}
