<?php

namespace Tests\Patterns\Behavioral;

use App\Patterns\Behavioral\Observer\ConcreteObserverA;
use App\Patterns\Behavioral\Observer\ConcreteObserverB;
use App\Patterns\Behavioral\Observer\Subject;
use Tests\TestCase;

class ObserverTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $subject = new Subject();

        $o1 = new ConcreteObserverA();
        $subject->attach($o1);

        $o2 = new ConcreteObserverB();
        $subject->attach($o2);

        $subject->someBusinessLogic();
        $subject->someBusinessLogic();

        $subject->detach($o2);

        $subject->someBusinessLogic();
        $this->assertTrue(true);
    }
}
