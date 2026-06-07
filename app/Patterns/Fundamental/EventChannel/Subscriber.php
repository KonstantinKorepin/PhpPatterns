<?php

namespace App\Patterns\Fundamental\EventChannel;

class Subscriber implements ISubscriber
{

    public function __construct(
        private string $name
    )
    {
    }

    public function notify(string $data): void
    {
        echo "Подписчик {$this->name} оповещён данными {$data}" . PHP_EOL;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
