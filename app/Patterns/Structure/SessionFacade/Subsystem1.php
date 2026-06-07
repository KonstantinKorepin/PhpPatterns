<?php

namespace App\Patterns\Structure\SessionFacade;

/**
 * Подсистема может принимать запросы либо от фасада,
 * либо от клиента напрямую. В любом случае, для
 * подсистемы Фасад - это ещё один клиент, и он не
 * является частью Подсистемы.
 */
class Subsystem1
{
    public function operation1(): string
    {
        return 'Subsystem1: Ready!' . PHP_EOL;
    }

    public function operationN(): string
    {
        return 'Subsystem1: Go!' . PHP_EOL;
    }
}
