<?php

namespace App\Patterns\Behavioral\PublisherSubscriber;

/**
 * Реализация шаблона Издатель-подписчик
 */
class PubSub
{
    /**
     * Обработчики
     * @var array
     */
    private array $handlers = [];

    /**
     * Подписать на событие
     *
     * @param string $eventName
     * @param array $callback
     * @return void
     */
    public function subscribe(string $eventName, array $callback): void
    {
        if (!isset($this->handlers[$eventName])) {
            $this->handlers[$eventName] = [];
        }

        $this->handlers[$eventName][] = $callback;
    }

    /**
     * Публикация событий
     *
     * @param string $eventName
     * @param array $args
     * @return void
     */
    public function publish(string $eventName, array $args)
    {
        if (isset($this->handlers[$eventName])) {
            foreach ($this->handlers[$eventName] as $handler) {
                call_user_func($handler, $args);
            }
        }
    }
}
