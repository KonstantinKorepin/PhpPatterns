<?php

namespace App\Patterns\Fundamental\EventChannel;

interface IPublisher
{
    public function publish(string $data): void;
}
