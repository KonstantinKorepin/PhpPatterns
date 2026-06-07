<?php

namespace App\Patterns\Creational\SimpleFactory1;

class DoorFactory
{
    const WOODEN = 'wooden';
    const IRON = 'iron';

    public function makeDoor($doorType, $width, $height): Door
    {
        switch ($doorType) {
            case self::WOODEN:
                return new WoodenDoor($width, $height);
            case self::IRON:
                return new IronDoor($width, $height);
        }
    }
}
