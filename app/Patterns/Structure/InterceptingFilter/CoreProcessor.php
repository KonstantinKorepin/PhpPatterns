<?php

namespace App\Patterns\Structure\InterceptingFilter;

class CoreProcessor implements IProcessor
{
    /**
     * Целевой запрос
     * @var IProcessor|null
     */
    private ?IProcessor $target;

    /**
     * @param IProcessor|null $target Целевой процесс
     */
    public function __construct(?IProcessor $target = null)
    {
        $this->target = $target;
    }

    public function execute(Request $req, Response $res): void
    {
        echo 'Execute processor filter' . PHP_EOL;
    }
}
