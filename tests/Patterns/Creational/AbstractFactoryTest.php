<?php

namespace Tests\Patterns\Creational;

use App\Patterns\Creational\AbstractFactory\AbstractFactory;
use App\Patterns\Creational\AbstractFactory\ConcreteFactory1;
use App\Patterns\Creational\AbstractFactory\ConcreteFactory2;
use Tests\TestCase;

class AbstractFactoryTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $str = <<<EOD
Client: Testing client code with the first factory type:
The result of the product B1.
The result of the B1 collaborating with the (The result of the product A1.)

Client: Testing the same client code with the second factory type:
The result of the product B2.
The result of the B2 collaborating with the (The result of the product A2.)

EOD;

        $this->expectOutputString($str);

        /**
         * Клиентский код может работать с любым конкретным классом фабрики.
         */
        echo "Client: Testing client code with the first factory type:\n";
        $this->clientCode(new ConcreteFactory1());

        echo "\n";

        echo "Client: Testing the same client code with the second factory type:\n";
        $this->clientCode(new ConcreteFactory2());
    }

    /**
     * Клиентский код работает с фабриками и продуктами только через абстрактные
     * типы: Абстрактная Фабрика и Абстрактный Продукт. Это позволяет передавать
     * любой подкласс фабрики или продукта клиентскому коду, не нарушая его.
     */
    function clientCode(AbstractFactory $factory)
    {
        $productA = $factory->createProductA();
        $productB = $factory->createProductB();

        echo $productB->usefulFunctionB() . "\n";
        echo $productB->anotherUsefulFunctionB($productA) . "\n";
    }
}
