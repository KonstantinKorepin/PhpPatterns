<?php

namespace App\Patterns\Structure\InterceptingFilter;

/**
 *
 */
class DebuggingFilter implements IProcessor
{
    /**
     * Целевой процесс для дебага
     * @var IProcessor
     */
    private IProcessor $target;

    /**
     * Процесс для дебага
     * @param IProcessor $target
     */
    public function __construct(IProcessor $target)
    {
        $this->target = $target;
    }

    /**
     * Запуск фильтра дебага
     * @param Request $req Объект запроса
     * @param Response $res Объект ответа
     * @return void
     */
    public function execute(Request $req, Response $res): void
    {
        // Do some filter processing here, such as
        echo "Debugging filter run" . PHP_EOL;
        // displaying request parameters
        $this->target->execute($req, $res);
    }
}
