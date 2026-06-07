<?php

namespace App\Patterns\Structure\Broker;

/**
 * Класс реализует слой клиента шаблона Брокера
 */
class BrokerClient
{
    private string $methodName;
    private string $params;
    private string $message;
    private CallMessage $resultMessage;

    /**
     * @param CallMessage $msg Передаваемое сообщение.
     */
    public function __construct(CallMessage $msg)
    {
        $this->methodName = $msg->getMethodName();
        $this->params = $msg->getParams();

        // Конвертируем сообщение в строку
        echo 'Client Broker Converting to String...' . PHP_EOL;
        $this->message = $this->methodName . ':' . $this->params;

        // Передаем сообщение
        echo 'Client Broker forwarding Bytes to Transfer...' . PHP_EOL;
        $transport = new Transport($this->message);

        // Получить возвращаемое сообщение и преобразовать его в объект callmessage
        $responseMessage = new CallMessage();
        $responseMessage->setResult((int) $transport->getMessage());

        $this->setResultMessage($responseMessage);
    }

    /**
     * Получить объект вызываемого сообщения
     * @return CallMessage
     */
    public function getResultMessage(): CallMessage
    {
        return $this->resultMessage;
    }

    /**
     * Устанавливает объект обращения
     * @param CallMessage $resultMessage
     * @return void
     */
    public function setResultMessage(CallMessage $resultMessage): void
    {
        $this->resultMessage = $resultMessage;
    }
}
