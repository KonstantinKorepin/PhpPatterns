<?php

namespace Tests\Patterns\Behavioral;

use App\Patterns\Behavioral\Strategy\ConcreteStrategyA;
use App\Patterns\Behavioral\Strategy\ConcreteStrategyB;
use App\Patterns\Behavioral\Strategy\Context;
use Tests\TestCase;

class StrategyTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        /**
         * Клиентский код выбирает конкретную стратегию и передаёт её в контекст. Клиент
         * должен знать о различиях между стратегиями, чтобы сделать правильный выбор.
         */
        $context = new Context(new ConcreteStrategyA());
        $res = trim($context->doSomeBusinessLogic());
        $this->assertTrue($res === 'a,b,c,d,e');

        $context = new Context(new ConcreteStrategyB());
        $res = trim($context->doSomeBusinessLogic());
        $this->assertTrue($res === 'e,d,c,b,a');
    }
}
