<?php

namespace App\Patterns\Creational\StaticFactory;

use InvalidArgumentException;

final class StaticFactory
{
    public static function create(string $type): Formatter
    {
        switch ($type) {
            case 'number':
                return new FormatNumber();
            case 'string':
                return new FormatString();
        }
        throw new InvalidArgumentException('Unknown format given');
    }
}
