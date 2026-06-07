<?php

namespace Tests\Patterns\Behavioral;

use App\Patterns\Behavioral\Memento\Caretaker;
use App\Patterns\Behavioral\Memento\Originator;
use Tests\TestCase;

class MementoTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        /**
         * Клиентский код.
         */
        $originator = new Originator("Super-duper-super-puper-super.");
        $caretaker = new Caretaker($originator);

        $caretaker->backup();
        $originator->doSomething();

        $caretaker->backup();
        $originator->doSomething();

        $caretaker->backup();
        $originator->doSomething();

        echo "\n";
        $caretaker->showHistory();

        echo "\nClient: Now, let's rollback!\n\n";
        $caretaker->undo();

        echo "\nClient: Once more!\n\n";
        $caretaker->undo();

        $this->assertTrue(true);
    }
}
