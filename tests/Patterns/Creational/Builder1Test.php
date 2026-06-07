<?php

namespace Tests\Patterns\Creational;

use App\Patterns\Creational\Builder1\BurgerBuilder;
use Tests\TestCase;

class Builder1Test extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $burger = (new BurgerBuilder(7))
            ->addLettuce()
            ->addPepperoni()
            ->addcheese()
            ->build();
        $this->assertTrue($burger->size === 7);
        $this->assertTrue($burger->tomato === false);
        $this->assertTrue($burger->cheese === true);
        $this->assertTrue($burger->pepperoni === true);
        $this->assertTrue($burger->lettuce === true);
    }
}
