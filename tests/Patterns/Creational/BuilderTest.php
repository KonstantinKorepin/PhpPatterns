<?php

namespace Tests\Patterns\Creational;

use App\Patterns\Creational\Builder\ConcreteBuilder1;
use App\Patterns\Creational\Builder\Director;
use Tests\TestCase;

class BuilderTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $str = <<<EOD
Standard basic product:
Product parts: PartA1

Standard full featured product:
Product parts: PartA1, PartB1, PartC1

Custom product:
Product parts: PartA1, PartC1


EOD;

        $this->expectOutputString($str);

        $director = new Director();
        $this->clientCode($director);
    }

    /**
     * Клиентский код создаёт объект-строитель, передаёт его директору, а затем
     * инициирует процесс построения. Конечный результат извлекается из объекта-
     * строителя.
     */
    function clientCode(Director $director)
    {
        $builder = new ConcreteBuilder1();
        $director->setBuilder($builder);

        echo "Standard basic product:\n";
        $director->buildMinimalViableProduct();
        $builder->getProduct()->listParts();

        echo "Standard full featured product:\n";
        $director->buildFullFeaturedProduct();
        $builder->getProduct()->listParts();

        // Помните, что паттерн Строитель можно использовать без класса Директор.
        echo "Custom product:\n";
        $builder->producePartA();
        $builder->producePartC();
        $builder->getProduct()->listParts();
    }
}
