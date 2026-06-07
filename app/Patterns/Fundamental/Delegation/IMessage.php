<?php

namespace App\Patterns\Fundamental\Delegation;

interface IMessage
{
    public function setHost(string $host): void;
    public function getHost(): string;
}
