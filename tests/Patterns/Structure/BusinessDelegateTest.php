<?php

namespace Tests\Patterns\Structure;

use App\Patterns\Structure\BusinessDelegate\BusinessDelegate;
use App\Patterns\Structure\BusinessDelegate\Client;
use Tests\TestCase;

class BusinessDelegateTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $str = <<<EOD
Processing task by invoking ConcreteService1
Processing task by invoking ConcreteService2

EOD;

        $this->expectOutputString($str);

        // Определяем бизнес-делегат
        $businessDelegate = new BusinessDelegate();
        $businessDelegate->setServiceType('first');

        // Определяем класс клиента
        $client = new Client($businessDelegate);
        $client->doTask();

        // Указываем делегату тип, который будет передан конкретному сервису
        $businessDelegate->setServiceType('other');
        $client->doTask();
    }
}
