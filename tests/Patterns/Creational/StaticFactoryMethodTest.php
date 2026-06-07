<?php

namespace Tests\Patterns\Creational;

use App\Patterns\Creational\StaticFactoryMethod\Creator;
use Tests\TestCase;

class StaticFactoryMethodTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $creator = new Creator();
        $tomorrow = $creator->getTomorrow();
        $today = $creator->getToday();

        $this->assertTrue($tomorrow == strtotime('tomorrow'));
        $this->assertTrue($today == strtotime('today'));
    }
}
