<?php

namespace App\Patterns\Fundamental\Delegation;

class Delegator implements IMessage
{
    private IMessage $delegator;

    public function setHost(string $host): void
    {
        $this->delegator->setHost($host);
    }

    public function getHost(): string
    {
        return $this->delegator->getHost();
    }

    public function byRemoteHostA(): IMessage
    {
        $this->delegator = new RemoteHostA(new Host());
        return $this->delegator;
    }

    public function byRemoteHostB(): IMessage
    {
        $this->delegator = new RemoteHostB(new Host());
        return $this->delegator;
    }
}
