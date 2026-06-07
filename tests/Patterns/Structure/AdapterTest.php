<?php

namespace Tests\Patterns\Structure;

use App\Patterns\Structure\Adapter\Adaptee;
use App\Patterns\Structure\Adapter\Adapter;
use App\Patterns\Structure\Adapter\Target;
use Tests\TestCase;

class AdapterTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        echo "Client: I can work just fine with the Target objects:\n";
        $target = new Target();
        $this->assertTrue($this->clientCode($target) === "Target: The default target's behavior.");

        $adaptee = new Adaptee();
        $adapter = new Adapter($adaptee);
        $this->assertTrue($this->clientCode($adapter) === "Adapter: (TRANSLATED) Special behavior of the Adaptee.");

    }

    /**
     * Клиентский код поддерживает все классы, использующие целевой интерфейс.
     */
    private function clientCode(Target $target)
    {
        return $target->request();
    }
}
