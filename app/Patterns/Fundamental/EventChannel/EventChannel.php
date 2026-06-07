<?php

namespace App\Patterns\Fundamental\EventChannel;

class EventChannel implements IEventChannel
{
    /**
     * @var array
     */
    private array $subscribers;

    public function notifySubscribers(string $sectionName, string $data): void
    {
        /** @var ISubscriber $subscriber */
        foreach ($this->subscribers[$sectionName] as $subscriber) {
            $subscriber->notify($data);
        }
    }

    public function subscribe(string $sectionName, ISubscriber $subscriber): void
    {
        $this->subscribers[$sectionName][] = $subscriber;
        echo $subscriber->getName() . " подписался на канал {$sectionName}" . PHP_EOL;
    }
}
