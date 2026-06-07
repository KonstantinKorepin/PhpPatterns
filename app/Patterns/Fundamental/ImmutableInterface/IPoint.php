<?php

namespace App\Patterns\Fundamental\ImmutableInterface;

interface IPoint
{
    public function getX(): int;
    public function setX(int $x): void;
    public function getY(): int;
    public function setY(int $y): void;
}
