<?php

namespace App\Patterns\Fundamental\MarkerInterface;

interface IMutable
{
    public function setX(?int $x): void;
    public function getX(): ?int;
}
