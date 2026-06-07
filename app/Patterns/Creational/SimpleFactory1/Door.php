<?php

namespace App\Patterns\Creational\SimpleFactory1;
// Интерфейс двери
interface Door
{
    public function getWidth(): float;
    public function getHeight(): float;
}
