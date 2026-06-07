<?php

namespace App\Patterns\Fundamental\Delegation;

class RemoteHostB extends Host
{
    public function __construct(private Host $host)
    {
    }

    function getHost(): string
    {
        return "RemoteHostB with " . $this->host->getHost() . PHP_EOL;
    }

    public function setHost(string $host): void
    {
        $this->host->setHost($host);
    }
}
