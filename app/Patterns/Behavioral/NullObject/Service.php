<?php

namespace App\Patterns\Behavioral\NullObject;

class Service
{
    private Logger $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function doSomething()
    {
        $this->logger->log('We are in ' . __METHOD__);
    }
}
