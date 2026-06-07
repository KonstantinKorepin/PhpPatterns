<?php

namespace Tests\Patterns\Creational;

use App\Patterns\Creational\SimpleFactory\SimpleBicycle;
use App\Patterns\Creational\SimpleFactory\SimpleFactory;
use App\Patterns\Creational\SimpleFactory\SportBicycle;
use Tests\TestCase;

class SimpleFactoryTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $factory = new SimpleFactory();

        $bicycle = $factory->createBicycle('simple');
        $this->assertInstanceOf(SimpleBicycle::class, $bicycle);

        $bicycle = $factory->createBicycle('sport');
        $this->assertInstanceOf(SportBicycle::class, $bicycle);
    }
}
