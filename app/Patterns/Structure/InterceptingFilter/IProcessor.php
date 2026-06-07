<?php

namespace App\Patterns\Structure\InterceptingFilter;

/**
 * Определяет интерфейс обработки запроса
 */
interface IProcessor
{
    /**
     * Выполнить обработку запроса
     * @param Request $req Объект запроса
     * @param Response $res Объект ответа
     * @return void
     */
    public function execute(Request $req, Response $res): void;
}
