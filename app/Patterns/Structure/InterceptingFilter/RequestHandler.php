<?php

namespace App\Patterns\Structure\InterceptingFilter;

/**
 * Эмулирование обработки основного запроса
 */
class RequestHandler
{
    /**
     * Фильтры для выполнения
     * @var array
     */
    private array $filters = [];

    public function __construct()
    {
        $this->filters[] = new DebuggingFilter(new CoreProcessor());
    }

    /**
     * Выполняем запрос
     * @param Request $req
     * @param Response $res
     * @return void
     */
    public function processRequest(Request $req, Response $res)
    {
        // Выполняем фильтры
        foreach ($this->filters as $filter) {
            $filter->execute($req, $res);
        }
        echo 'Main request handler run' . PHP_EOL;
    }
}
