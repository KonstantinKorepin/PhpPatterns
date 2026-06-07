<?php

namespace Tests\Patterns\Structure;

use App\Patterns\Structure\Bridge\Abstraction;
use App\Patterns\Structure\Bridge\ConcreteImplementationA;
use App\Patterns\Structure\Bridge\ConcreteImplementationB;
use App\Patterns\Structure\Bridge\ExtendedAbstraction;
use Tests\TestCase;

class BridgeTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $str = <<<EOD
Abstraction: Base operation with:
ConcreteImplementationA: Here's the result on the platform A.

ExtendedAbstraction: Extended operation with:
ConcreteImplementationB: Here's the result on the platform B.

EOD;

        $this->expectOutputString($str);

        /**
         * Клиентский код должен работать с любой предварительно сконфигурированной
         * комбинацией абстракции и реализации.
         */
        $implementation = new ConcreteImplementationA();
        $abstraction = new Abstraction($implementation);
        $this->clientCode($abstraction);

        echo "\n";

        $implementation = new ConcreteImplementationB();
        $abstraction = new ExtendedAbstraction($implementation);
        $this->clientCode($abstraction);
    }

    /**
     * За исключением этапа инициализации, когда объект Абстракции связывается с
     * определённым объектом Реализации, клиентский код должен зависеть только от
     * класса Абстракции. Таким образом, клиентский код может поддерживать любую
     * комбинацию абстракции и реализации.
     */
    private function clientCode(Abstraction $abstraction)
    {
        // ...

        echo $abstraction->operation();

        // ...
    }
}
