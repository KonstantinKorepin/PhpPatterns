<?php

namespace Tests\Patterns\Behavioral;

use App\Patterns\Behavioral\Iterator\WordsCollection;
use Tests\TestCase;

class IteratorTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $str = <<<EOD
Straight traversal:
First
Second
Third

Reverse traversal:
Third
Second
First

EOD;

        $this->expectOutputString($str);

        /**
         * Клиентский код может знать или не знать о Конкретном Итераторе или классах
         * Коллекций, в зависимости от уровня косвенности, который вы хотите сохранить в
         * своей программе.
         */
        $collection = new WordsCollection();
        $collection->addItem("First");
        $collection->addItem("Second");
        $collection->addItem("Third");

        echo "Straight traversal:\n";
        foreach ($collection->getIterator() as $item) {
            echo $item . "\n";
        }

        echo "\n";
        echo "Reverse traversal:\n";
        foreach ($collection->getReverseIterator() as $item) {
            echo $item . "\n";
        }
    }
}
