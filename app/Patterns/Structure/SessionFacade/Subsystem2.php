<?php

namespace App\Patterns\Structure\SessionFacade;

/**
 * Некоторые фасады могут работать с разными
 * подсистемами одновременно.
 */
class Subsystem2
{
    public function operation1(SessionObject $session): string
    {
        echo 'Execute some operation with session object:' . get_class($session) . PHP_EOL;
        return 'Subsystem2: Get ready!' . PHP_EOL;
    }

    public function operationZ(): string
    {
        return 'Subsystem2: Fire!' . PHP_EOL;
    }
}
