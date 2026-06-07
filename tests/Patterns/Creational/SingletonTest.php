<?php

namespace Tests\Patterns\Creational;

use App\Patterns\Creational\Singleton\Config;
use App\Patterns\Creational\Singleton\Logger;
use Tests\TestCase;

class SingletonTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $l1 = Logger::getInstance();
        $l2 = Logger::getInstance();
        $this->assertTrue($l1 === $l2);

        // Проверяем, как одиночка-Конфигурация сохраняет данные...
        $config1 = Config::getInstance();
        $login = "test_login";
        $password = "test_password";
        $config1->setValue("login", $login);
        $config1->setValue("password", $password);
        // ...и восстанавливает их.
        $config2 = Config::getInstance();
        $this->assertTrue($login == $config2->getValue("login"));
        $this->assertTrue($password == $config2->getValue("password"));
    }
}
