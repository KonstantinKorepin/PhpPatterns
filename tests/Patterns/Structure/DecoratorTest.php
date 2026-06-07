<?php

namespace Tests\Patterns\Structure;

use App\Patterns\Structure\Decorator\ConcreteComponent;
use App\Patterns\Structure\Decorator\ConcreteDecoratorA;
use App\Patterns\Structure\Decorator\ConcreteDecoratorB;
use Tests\TestCase;
use App\Patterns\Structure\Decorator\Component;

class DecoratorTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $str = <<<EOD
RESULT: ConcreteComponent
RESULT: ConcreteDecoratorB(ConcreteDecoratorA(ConcreteComponent))

EOD;

        /**
         * Таким образом, клиентский код может поддерживать как простые компоненты...
         */
        $simple = new ConcreteComponent();
        $this->clientCode($simple);

        /**
         * ...так и декорированные.
         *
         * Обратите внимание, что декораторы могут обёртывать не только простые
         * компоненты, но и другие декораторы.
         */
        $decorator1 = new ConcreteDecoratorA($simple);
        $decorator2 = new ConcreteDecoratorB($decorator1);
        $this->clientCode($decorator2);

        $this->expectOutputString($str);
    }

    /**
     * Клиентский код работает со всеми объектами, используя интерфейс Компонента.
     * Таким образом, он остаётся независимым от конкретных классов компонентов, с
     * которыми работает.
     */
    private function clientCode(Component $component)
    {
        // ...

        echo "RESULT: " . $component->operation() . PHP_EOL;

        // ...
    }
}
