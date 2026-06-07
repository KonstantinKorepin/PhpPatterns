<?php

namespace App\Patterns\Structure\PipesAndFilter;

/**
 * Модификаторы
 *
 */
class Modifier
{
    /**
     * Модификация
     *
     * @param array $list
     * @return void
     */
    public function modify(array $list): void
    {
        // Одежда на глажку
        $actualList = array_filter($list, fn(Clothes $clothes) => $clothes->isDirty());
        foreach ($actualList as $item) {
            $process = $this->matches($item);

            /** @var Process $proc */
            foreach ($process as $proc) {
                $proc->process();
            }
        }
    }

    /**
     * Назначает задания для одежды
     *
     * @param Clothes $clothes
     * @return array
     */
    private function matches(Clothes $clothes): array
    {
        $processes = [];
        if ($clothes->isIron()) {
            $processes[] = new Iron();
        }

        if ($clothes->isShoulders()) {
            $processes[] = new Shoulder();
        }

        if ($clothes->isThreadNeed()) {
            $processes[] = new ThreadNeedle();
        }
        return $processes;
    }
}
