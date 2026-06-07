<?php

namespace Tests\Patterns\Behavioral;

use App\Patterns\Behavioral\SingleServingVisitor\SingleServingVisitor;
use App\Patterns\Behavioral\Visitor\ConcreteComponentA;
use App\Patterns\Behavioral\Visitor\ConcreteComponentB;
use Tests\TestCase;

class SingleServingVisitorTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $str = <<<EOD
visitConcreteComponentA
visitConcreteComponentB

EOD;

        $this->expectOutputString($str);

        // Используем стандартные компоненты посетителя
        $components = [
            new ConcreteComponentA(),
            new ConcreteComponentB(),
        ];

        foreach ($components as $component) {
            // Инициализация посетителя реализована в виде Одиночки. В
            // классической реализации одноразового посетителя
            // реализуется метод apply_to в интерфейсе компонентов,
            // которые создают и удаляют каждый
            $component->accept(SingleServingVisitor::getInstance());
        }
    }
}
