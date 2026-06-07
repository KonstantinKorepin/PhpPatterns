<?php

namespace App\Patterns\Fundamental\Delegation;

class RemoteHostA extends Host
{
    public function __construct(private Host $host)
    {
    }

    function getHost(): string
    {
        return "RemoteHostA with " . $this->host->getHost() . PHP_EOL;
    }

    public function setHost(string $host): void
    {
        $this->host->setHost($host);
    }
}
