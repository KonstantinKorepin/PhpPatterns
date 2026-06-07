<?php

namespace Tests\Patterns\Structure;

use App\Patterns\Structure\SessionFacade\SessionFacade;
use App\Patterns\Structure\SessionFacade\Subsystem1;
use App\Patterns\Structure\SessionFacade\Subsystem2;
use Tests\TestCase;

class SessionFacadeTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $str = <<<EOD
Execute some operation with session object:App\Patterns\Structure\SessionFacade\SessionObject
Facade initializes subsystems:
Subsystem1: Ready!
Subsystem2: Get ready!
Facade orders subsystems to perform the action:
Subsystem1: Go!
Subsystem2: Fire!

EOD;
        $this->expectOutputString($str);

        /**
         * В клиентском коде могут быть уже созданы некоторые
         * объекты подсистемы. В этом случае может оказаться
         * целесообразным инициализировать Фасад с этими
         * объектами вместо того, чтобы позволить Фасаду
         * создавать новые экземпляры.
         */
        $subsystem1 = new Subsystem1();
        $subsystem2 = new Subsystem2();
        $facade = new SessionFacade($subsystem1, $subsystem2);
        $this->clientCode($facade);
    }

    /**
     * Клиентский код работает со сложными подсистемами
     * через простой интерфейс, предоставляемый Фасадом.
     * Когда фасад управляет жизненным циклом подсистемы,
     * клиент может даже не знать о существовании подсистемы.
     * Такой подход позволяет держать сложность под контролем.
     *
     *
     * @param SessionFacade $facade
     * @return void
     */
    private function clientCode(SessionFacade $facade)
    {
        echo $facade->operation();
    }
}
