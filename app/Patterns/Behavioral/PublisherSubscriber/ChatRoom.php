<?php

namespace App\Patterns\Behavioral\PublisherSubscriber;

/**
 * Пример использования шаблона Издатель-подписчик. В отличие от Observer или Event Channel (шины событий),
 * связь между объектами осуществляется посредством обратных вызовов.
 *
 */
class ChatRoom
{
    /**
     * Объект издателя-подписчика
     *
     * @var PubSub
     */
    private PubSub $pubSub;

    /**
     * Инициирует подписку на издателя
     */
    public function __construct()
    {
        $this->pubSub = new PubSub();
        $this->pubSub->subscribe('message', [
            __CLASS__,
            'emitMessage'
        ]);
    }

    /**
     * Публикация сообщения
     *
     * @param array $msg
     * @return void
     */
    static public function emitMessage(array $msg) {
        foreach ($msg as $m) {
            echo $m . PHP_EOL;
        }
    }

    /**
     * Отправляет сообщение издателю
     *
     * @param string $msg
     * @return void
     */
    public function sendMessage(string $msg)
    {
        $this->pubSub->publish('message', [$msg]);
    }
}
