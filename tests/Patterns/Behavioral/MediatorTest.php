<?php

namespace Tests\Patterns\Behavioral;

use App\Patterns\Behavioral\Mediator\Component1;
use App\Patterns\Behavioral\Mediator\Component2;
use App\Patterns\Behavioral\Mediator\ConcreteMediator;
use Tests\TestCase;

class MediatorTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $str = <<<EOD
Client triggers operation A.
Component 1 does A.
Mediator reacts on A and triggers following operations:
Component 2 does C.

Client triggers operation D.
Component 2 does D.
Mediator reacts on D and triggers following operations:
Component 1 does B.
Component 2 does C.

EOD;

        $this->expectOutputString($str);

        /**
         * Клиентский код.
         */
        $c1 = new Component1();
        $c2 = new Component2();
        $mediator = new ConcreteMediator($c1, $c2);

        echo "Client triggers operation A.\n";
        $c1->doA();

        echo "\n";
        echo "Client triggers operation D.\n";
        $c2->doD();
    }
}
