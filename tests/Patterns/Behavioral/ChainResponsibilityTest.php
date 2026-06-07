<?php

namespace Tests\Patterns\Behavioral;

use App\Patterns\Behavioral\ChainResponsibility\DogHandler;
use App\Patterns\Behavioral\ChainResponsibility\Handler;
use App\Patterns\Behavioral\ChainResponsibility\MonkeyHandler;
use App\Patterns\Behavioral\ChainResponsibility\SquirrelHandler;
use Tests\TestCase;

class ChainResponsibilityTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $str = <<<EOD
Chain: Monkey > Squirrel > Dog

Client: Who wants a Nut?
  Squirrel: I'll eat the Nut.
Client: Who wants a Banana?
  Monkey: I'll eat the Banana.
Client: Who wants a Cup of coffee?
  Cup of coffee was left untouched.

Subchain: Squirrel > Dog

Client: Who wants a Nut?
  Squirrel: I'll eat the Nut.
Client: Who wants a Banana?
  Banana was left untouched.
Client: Who wants a Cup of coffee?
  Cup of coffee was left untouched.

EOD;

        $this->expectOutputString($str);

        /**
         * Другая часть клиентского кода создает саму цепочку.
         */
        $monkey = new MonkeyHandler();
        $squirrel = new SquirrelHandler();
        $dog = new DogHandler();

        $monkey->setNext($squirrel)->setNext($dog);

        /**
         * Клиент должен иметь возможность отправлять запрос любому обработчику, а не
         * только первому в цепочке.
         */
        echo "Chain: Monkey > Squirrel > Dog\n\n";
        $this->clientCode($monkey);
        echo "\n";

        echo "Subchain: Squirrel > Dog\n\n";
        $this->clientCode($squirrel);
    }

    /**
     * Обычно клиентский код приспособлен для работы с единственным обработчиком. В
     * большинстве случаев клиенту даже неизвестно, что этот обработчик является
     * частью цепочки.
     */
    private function clientCode(Handler $handler)
    {
        foreach (["Nut", "Banana", "Cup of coffee"] as $food) {
            echo "Client: Who wants a " . $food . "?\n";
            $result = $handler->handle($food);
            if ($result) {
                echo "  " . $result;
            } else {
                echo "  " . $food . " was left untouched.\n";
            }
        }
    }
}
