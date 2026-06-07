<?php

namespace Tests\Patterns\Creational;

use App\Patterns\Creational\FactoryMethod\ConcreteCreator1;
use App\Patterns\Creational\FactoryMethod\ConcreteCreator2;
use App\Patterns\Creational\FactoryMethod\Creator;
use Tests\TestCase;

class FactoryMethodTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $this->expectOutputString('{Result of the ConcreteProduct1}{Result of the ConcreteProduct2}');

        /**
         * Приложение выбирает тип создателя в зависимости от конфигурации или среды.
         */
        $this->clientCode(new ConcreteCreator1());
        $this->clientCode(new ConcreteCreator2());
    }

    /**
     * Клиентский код работает с экземпляром конкретного создателя, хотя и через его
     * базовый интерфейс. Пока клиент продолжает работать с создателем через базовый
     * интерфейс, вы можете передать ему любой подкласс создателя.
     */
    function clientCode(Creator $creator)
    {
        // ...
        echo $creator->someOperation();
        // ...
    }
}
