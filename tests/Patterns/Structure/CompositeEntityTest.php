<?php

namespace Tests\Patterns\Structure;

use App\Patterns\Structure\CompositeEntity\Client;
use Tests\TestCase;

class CompositeEntityTest extends TestCase
{
    /**
     * Пример использования Составной объект
     */
    public function test_example(): void
    {
        $str = <<<EOD
Test
Data
Second Test
Data1

EOD;
        $this->expectOutputString($str);

        /**
         * Работа происходит с одним объектом, который можно использовать как составной независимый объект с
         * набором данных
         */
        $client = new Client();
        $client->setData('Test', 'Data');
        $client->printData();

        $client->setData('Second Test', 'Data1');
        $client->printData();
    }
}
