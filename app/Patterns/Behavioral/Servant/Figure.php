<?php

namespace App\Patterns\Behavioral\Servant;

class Figure implements Movable
{
    /**
     * @var Position
     */
    protected Position $p;

    /**
     * @param Position $p
     * @return void
     */
    public function setPosition(Position $p): void
    {
        $this->p = $p;
    }

    /**
     * @return Position
     */
    public function getPosition(): Position
    {
        return $this->p;
    }
}
