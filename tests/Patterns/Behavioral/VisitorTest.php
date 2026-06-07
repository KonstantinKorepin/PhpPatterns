<?php

namespace Tests\Patterns\Behavioral;

use App\Patterns\Behavioral\Visitor\ConcreteComponentA;
use App\Patterns\Behavioral\Visitor\ConcreteComponentB;
use App\Patterns\Behavioral\Visitor\ConcreteVisitor1;
use App\Patterns\Behavioral\Visitor\ConcreteVisitor2;
use App\Patterns\Behavioral\Visitor\Visitor;
use Tests\TestCase;

class VisitorTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $str = <<<EOD
The client code works with all visitors via the base Visitor interface:
A + ConcreteVisitor1
B + ConcreteVisitor1

It allows the same client code to work with different types of visitors:
A + ConcreteVisitor2
B + ConcreteVisitor2

EOD;

        $this->expectOutputString($str);

        $components = [
            new ConcreteComponentA(),
            new ConcreteComponentB(),
        ];

        echo "The client code works with all visitors via the base Visitor interface:\n";
        $visitor1 = new ConcreteVisitor1();
        $this->clientCode($components, $visitor1);
        echo "\n";

        echo "It allows the same client code to work with different types of visitors:\n";
        $visitor2 = new ConcreteVisitor2();
        $this->clientCode($components, $visitor2);
    }

    /**
     * Клиентский код может выполнять операции посетителя над любым набором
     * элементов, не выясняя их конкретных классов. Операция принятия направляет
     * вызов к соответствующей операции в объекте посетителя.
     */
    private function clientCode(array $components, Visitor $visitor)
    {
        // ...
        foreach ($components as $component) {
            $component->accept($visitor);
        }
        // ...
    }
}
