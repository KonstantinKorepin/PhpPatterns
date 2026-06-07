<?php

namespace App\Patterns\Fundamental\EventChannel;

class Publisher implements IPublisher
{
    public function __construct(
        private string $sectionName,
        private IEventChannel $eventChannel
    )
    {
    }

    public function publish(string $data): void
    {
        $this->eventChannel->notifySubscribers($this->sectionName, $data);
    }
}
