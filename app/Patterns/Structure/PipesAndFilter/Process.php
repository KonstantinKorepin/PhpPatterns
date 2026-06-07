<?php

namespace App\Patterns\Structure\PipesAndFilter;

/**
 * Интерфейс процесса уборки одежды
 */
interface Process
{
    /**
     * Метод выполнения процедуры над одеждой
     * @return void
     */
    public function process(): void;
}
