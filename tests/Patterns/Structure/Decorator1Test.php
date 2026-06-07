<?php

namespace Tests\Patterns\Structure;

use App\Patterns\Structure\Decorator1\MilkCoffee;
use App\Patterns\Structure\Decorator1\SimpleCoffee;
use App\Patterns\Structure\Decorator1\VanillaCoffee;
use App\Patterns\Structure\Decorator1\WhipCoffee;
use Tests\TestCase;

class Decorator1Test extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $coffee = new SimpleCoffee();
        $this->assertTrue($coffee->getCost() === 10);
        $this->assertTrue($coffee->getDescription() === 'Simple coffee');

        $coffee = new MilkCoffee($coffee);
        $this->assertTrue($coffee->getCost() === 12);
        $this->assertTrue($coffee->getDescription() === 'Simple coffee, milk');

        $coffee = new WhipCoffee($coffee);
        $this->assertTrue($coffee->getCost() === 17);
        $this->assertTrue($coffee->getDescription() === 'Simple coffee, milk, whip');

        $coffee = new VanillaCoffee($coffee);
        $this->assertTrue($coffee->getCost() === 20);
        $this->assertTrue($coffee->getDescription() === 'Simple coffee, milk, whip, vanilla');

        $coffee = new VanillaCoffee(new WhipCoffee(new MilkCoffee(new SimpleCoffee())));
        $this->assertTrue($coffee->getCost() === 20);
        $this->assertTrue($coffee->getDescription() === 'Simple coffee, milk, whip, vanilla');
    }
}
