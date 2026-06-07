<?php

namespace App\Patterns\Fundamental\EventChannel;

interface IEventChannel
{
    public function notifySubscribers(string $sectionName, string $data): void;
    public function subscribe(string $sectionName, ISubscriber $subscriber): void;
}
