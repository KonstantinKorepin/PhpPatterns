<?php

namespace Tests\Patterns\Behavioral;

use App\Patterns\Behavioral\State\ConcreteStateA;
use App\Patterns\Behavioral\State\Context;
use Tests\TestCase;

class StateTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $str = <<<EOD
Context: Transition to App\Patterns\Behavioral\State\ConcreteStateA.
ConcreteStateA handles request1.
ConcreteStateA wants to change the state of the context.
Context: Transition to App\Patterns\Behavioral\State\ConcreteStateB.
ConcreteStateB handles request2.
ConcreteStateB wants to change the state of the context.
Context: Transition to App\Patterns\Behavioral\State\ConcreteStateA.

EOD;

        $this->expectOutputString($str);

        $context = new Context(new ConcreteStateA());
        $context->request1();
        $context->request2();
    }
}
