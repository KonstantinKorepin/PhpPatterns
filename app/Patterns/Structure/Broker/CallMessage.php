<?php

namespace App\Patterns\Structure\Broker;

/**
 * Объект передаваемого запроса посредством брокера
 */
class CallMessage
{
    /**
     * Наименование вызываемого метода
     * @var string
     */
    private string $methodName;

    /**
     * Передаваемые параметры
     * @var mixed
     */
    private $params;

    /**
     * Результат ответа
     * @var int
     */
    private int $result;

    /**
     * Ответ сервера
     * @var string
     */
    private string $serverResult;

    /**
     * @param string $methodName Наименование метода
     * @param mixed $currParams Параметры
     */
    public function __construct(
        string $methodName = '',
        mixed $currParams = ''
    )
    {
        $this->methodName = $methodName;
        $this->params = $currParams;
    }

    /**
     * Устанавливает ответ сервера
     * @param string $result Ответ сервера
     * @return void
     */
    public function setServerResult(string $result): void
    {
        $this->serverResult = $result;
    }

    /**
     * Возвращает результат от сервера
     * @return string
     */
    public function getServerResult(): string
    {
        return $this->serverResult;
    }

    public function getMethodName(): string
    {
        return $this->methodName;
    }

    public function getParams(): mixed
    {
        return $this->params;
    }

    public function getResult(): int
    {
        return $this->result;
    }

    public function setResult(int $result): void
    {
        $this->result = $result;
    }
}
