<?php

namespace App\Patterns\Creational\Multiton;

class DB
{
    private static array $instances = [];

    private string $dbName;

    private function __construct(string $dbName)
    {
        $this->dbName = $dbName;
    }

    public static function getInstance(string $instanceKey): self
    {
        if (empty(self::$instances[$instanceKey])) {
            self::$instances[$instanceKey] = new self($instanceKey);
        }
        return self::$instances[$instanceKey];
    }

    public function getName(): string
    {
        return $this->dbName;
    }
}
