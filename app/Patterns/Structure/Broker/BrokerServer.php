<?php

namespace App\Patterns\Structure\Broker;

/**
 * Реализует сервер брокера
 */
class BrokerServer
{
    /**
     * Наименование вызываемого метода
     * @var string
     */
    private string $methodName;

    /**
     * Параметры метода
     * @var mixed
     */
    private $params;

    /**
     * Объект запроса
     * @var CallMessage
     */
    private CallMessage $msgServer;

    /**
     * Сообщение
     * @var string
     */
    private string $message;

    /**
     * @param string $message Сообщение
     */
    public function __construct(string $message)
    {
        // Парсим входящее сообщение
        $this->parseMessage($message);

        // Передать сообщение server-side proxy
        echo 'Server Broker transferring data to Server-Side Proxy' . PHP_EOL;
        $server = new ServerProxy($this->msgServer);

        // получаем и устанавливаем полученные данные
        echo 'Returning results...' . PHP_EOL;
        $this->msgServer = $server->getResult();

        $this->setMessage($this->msgServer->getServerResult());
    }

    /**
     * Парсит входящее сообщение
     * @param string $message Тело сообщения
     * @return void
     */
    private function parseMessage(string $message): void
    {
        [$methodName, $params] = explode(':', $message);
        $this->methodName = $methodName;
        $this->params = explode('|', $params);

        $this->msgServer = new CallMessage($this->methodName, $this->params);
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
