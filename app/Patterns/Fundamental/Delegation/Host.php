<?php

namespace App\Patterns\Fundamental\Delegation;

class Host implements IMessage
{
    private string $host;

    public function setHost(string $host): void
    {
        $this->host = $host;
    }

    public function getHost(): string
    {
        return $this->host;
    }
}
