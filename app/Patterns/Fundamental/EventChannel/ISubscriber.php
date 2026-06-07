<?php

namespace App\Patterns\Fundamental\EventChannel;

interface ISubscriber
{
    public function notify(string $data): void;
    public function getName(): string;
}
