<?php

namespace App\Patterns\Structure\Registry;

use InvalidArgumentException;

abstract class Registry
{
    const LOGGER = 'logger';

    /**
     * @var array
     */
    private static array $services = [];

    private static array $allowedKeys = [
        self::LOGGER
    ];

    public static function set(string $key, Service $value)
    {
        if (!in_array($key, self::$allowedKeys)) {
            throw new InvalidArgumentException('Invalid key given');
        }
        self::$services[$key] = $value;
    }

    public static function get(string $key): Service
    {
        if (!in_array($key, self::$allowedKeys)) {
            throw new InvalidArgumentException('Invalid key given');
        }
        return self::$services[$key];
    }
}
