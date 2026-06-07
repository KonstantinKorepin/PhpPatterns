<?php

namespace App\Patterns\Creational\SimpleFactory;

class SimpleFactory
{
    public function createBicycle($type): IBicycle
    {
        if ($type === 'sport') {
            return new SportBicycle();
        }

        return new SimpleBicycle();
    }
}
