<?php

namespace Tests\Patterns\Structure;

use App\Patterns\Structure\Facade1\Computer;
use App\Patterns\Structure\Facade1\ComputerFacade;
use Tests\TestCase;

class Facade1Test extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testTurnOn(): void
    {
        $str = <<<EOD
Ouch!Beep beep!Loading..Ready to be used!
EOD;
        $this->expectOutputString($str);

        $computer = new ComputerFacade(new Computer());
        $computer->turnOn();
    }

    public function testTurnOff(): void
    {
        $str = <<<EOD
Bup bup bup buzzzz!Haaah!Zzzzz
EOD;
        $this->expectOutputString($str);

        $computer = new ComputerFacade(new Computer());
        $computer->turnOff();
    }
}
