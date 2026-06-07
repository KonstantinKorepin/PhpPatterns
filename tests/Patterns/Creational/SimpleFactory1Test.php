<?php

namespace Tests\Patterns\Creational;

use App\Patterns\Creational\SimpleFactory1\DoorFactory;
use App\Patterns\Creational\SimpleFactory1\IronDoor;
use App\Patterns\Creational\SimpleFactory1\WoodenDoor;
use Tests\TestCase;

class SimpleFactory1Test extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $doorType = DoorFactory::WOODEN;

        $factory = new DoorFactory();
        $woodenDoor = $factory->makeDoor($doorType, 10, 20);

        $doorType = DoorFactory::IRON;
        $ironDoor = $factory->makeDoor($doorType, 30, 40);

        $this->assertTrue($woodenDoor instanceof WoodenDoor);
        $this->assertTrue($ironDoor instanceof IronDoor);

        $this->assertTrue($woodenDoor->getWidth() == 10);
        $this->assertTrue($woodenDoor->getHeight() == 20);
        $this->assertTrue($ironDoor->getWidth() == 30);
        $this->assertTrue($ironDoor->getHeight() == 40);
    }
}
