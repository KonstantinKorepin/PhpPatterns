<?php

namespace App\Patterns\Structure\Broker;

/**
 * Слой клиента, отправляющий сообщение посредством брокера
 */
class Client
{
    public function run()
    {
        $clientProxy = new ClientProxy();

        echo 'Calling AddIntegers on 1 and 20...' . PHP_EOL;
        $clientProxy->addIntegers(1, 20);

        echo 'Calling AddIntegers on 2500 and 3000...' . PHP_EOL;
        $clientProxy->addIntegers(2500, 3000);

        echo "Calling getLength on 'Broker in PHP'..." . PHP_EOL;
        $clientProxy->getLength('Broker in PHP');
    }
}
