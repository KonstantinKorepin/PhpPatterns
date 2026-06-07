<?php

namespace Tests\Patterns\Behavioral;

use App\Patterns\Behavioral\Command\ComplexCommand;
use App\Patterns\Behavioral\Command\Invoker;
use App\Patterns\Behavioral\Command\Receiver;
use App\Patterns\Behavioral\Command\SimpleCommand;
use Tests\TestCase;

class CommandTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $str = <<<EOD
Invoker: Does anybody want something done before I begin?
SimpleCommand: See, I can do simple things like printing (Say Hi!)
Invoker: ...doing something really important...
Invoker: Does anybody want something done after I finish?
ComplexCommand: Complex stuff should be done by a receiver object.
Receiver: Working on (Send email.)
Receiver: Also working on (Save report.)

EOD;

        $this->expectOutputString($str);

        /**
         * Клиентский код может параметризовать отправителя любыми командами.
         */
        $invoker = new Invoker();
        $invoker->setOnStart(new SimpleCommand("Say Hi!"));
        $receiver = new Receiver();
        $invoker->setOnFinish(new ComplexCommand($receiver, "Send email", "Save report"));

        $invoker->doSomethingImportant();
    }
}
