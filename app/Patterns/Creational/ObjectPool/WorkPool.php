<?php

namespace App\Patterns\Creational\ObjectPool;

use Countable;

class WorkPool implements Countable
{
    /**
     * @var array Занятые исполнители
     */
    private array $occupiedWorkers = [];

    /**
     * @var array Свободные исполнители
     */
    private array $freeWorkers = [];

    /**
     * @return StringReverseWorker Получает исполнителя. Если уже есть созданные свободные объекты -
     * возвращает их.
     */
    public function get(): StringReverseWorker
    {
        if (count($this->freeWorkers) === 0) {
            $worker = new StringReverseWorker();
        } else {
            $worker = array_pop($this->freeWorkers);
        }

        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;
        return $worker;
    }

    /**
     * Очищает и удаляет объект из пула
     * @param StringReverseWorker $worker
     * @return void
     */
    public function dispose(StringReverseWorker $worker): void
    {
        $key = spl_object_hash($worker);

        if (isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }

    /**
     * Количество объектов в пуле
     * @return int
     */
    public function count(): int
    {
        return count($this->occupiedWorkers) + count($this->freeWorkers);
    }
}
