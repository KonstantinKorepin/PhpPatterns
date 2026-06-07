<?php

namespace Tests\Patterns\Behavioral;

use App\Patterns\Behavioral\TemplateMethod\AbstractClass;
use App\Patterns\Behavioral\TemplateMethod\ConcreteClass1;
use App\Patterns\Behavioral\TemplateMethod\ConcreteClass2;
use Tests\TestCase;

class TemplateMethodTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $str = <<<EOD
Same client code can work with different subclasses:
AbstractClass says: I am doing the bulk of the work
ConcreteClass1 says: Implemented Operation1
AbstractClass says: But I let subclasses override some operations
ConcreteClass1 says: Implemented Operation2
AbstractClass says: But I am doing the bulk of the work anyway

Same client code can work with different subclasses:
AbstractClass says: I am doing the bulk of the work
ConcreteClass2 says: Implemented Operation1
AbstractClass says: But I let subclasses override some operations
ConcreteClass2 says: Overridden Hook1
ConcreteClass2 says: Implemented Operation2
AbstractClass says: But I am doing the bulk of the work anyway

EOD;

        $this->expectOutputString($str);

        echo "Same client code can work with different subclasses:\n";
        $this->clientCode(new ConcreteClass1());
        echo "\n";

        echo "Same client code can work with different subclasses:\n";
        $this->clientCode(new ConcreteClass2());
    }

    /**
     * Клиентский код вызывает шаблонный метод для выполнения алгоритма. Клиентский
     * код не должен знать конкретный класс объекта, с которым работает, при
     * условии, что он работает с объектами через интерфейс их базового класса.
     */
    private function clientCode(AbstractClass $class)
    {
        $class->templateMethod();
    }
}
