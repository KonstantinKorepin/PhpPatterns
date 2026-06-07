<?php

namespace Tests\Patterns\Structure;

use App\Patterns\Structure\Facade\Facade;
use App\Patterns\Structure\Facade\Subsystem1;
use App\Patterns\Structure\Facade\Subsystem2;
use Tests\TestCase;

class FacadeTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        /**
         * В клиентском коде могут быть уже созданы некоторые объекты подсистемы. В этом
         * случае может оказаться целесообразным инициализировать Фасад с этими
         * объектами вместо того, чтобы позволить Фасаду создавать новые экземпляры.
         */
        $str = <<<EOD
Facade initializes subsystems:
Subsystem1: Ready!
Subsystem2: Get ready!
Facade orders subsystems to perform the action:
Subsystem1: Go!
Subsystem2: Fire!

EOD;

        $this->expectOutputString($str);

        $subsystem1 = new Subsystem1();
        $subsystem2 = new Subsystem2();
        $facade = new Facade($subsystem1, $subsystem2);
        $this->clientCode($facade);
    }

    /**
     * Клиентский код работает со сложными подсистемами через простой интерфейс,
     * предоставляемый Фасадом. Когда фасад управляет жизненным циклом подсистемы,
     * клиент может даже не знать о существовании подсистемы. Такой подход позволяет
     * держать сложность под контролем.
     */
    private function clientCode(Facade $facade)
    {
        // ...

        echo $facade->operation();

        // ...
    }
}
