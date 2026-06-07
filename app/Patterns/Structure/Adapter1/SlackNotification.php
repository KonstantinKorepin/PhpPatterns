<?php

namespace App\Patterns\Structure\Adapter1;

/**
 * Адаптер – класс, который связывает Целевой интерфейс и Адаптируемый класс.
 * Это позволяет приложению использовать Slack API для отправки уведомлений.
 */
class SlackNotification implements Notification
{
    private $slack;
    private $chatId;

    public function __construct(SlackApi $slack, string $chatId)
    {
        $this->slack = $slack;
        $this->chatId = $chatId;
    }

    /**
     * Адаптер способен адаптировать интерфейсы и преобразовывать входные данные
     * в формат, необходимый Адаптируемому классу.
     */
    public function send(string $title, string $message): string
    {
        $slackMessage = "#" . $title . "# " . strip_tags($message);
        $this->slack->logIn();
        return $this->slack->sendMessage($this->chatId, $slackMessage);
    }
}
