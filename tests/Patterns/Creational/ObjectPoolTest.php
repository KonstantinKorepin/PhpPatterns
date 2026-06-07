<?php

namespace Tests\Patterns\Creational;

use App\Patterns\Creational\ObjectPool\WorkPool;
use Tests\TestCase;

class ObjectPoolTest extends TestCase
{
    /**
     * Объектный пул создаёт объекты и помещает их в кэш
     */
    public function testCanGetNewInstanceWithGet(): void
    {
        $pool = new WorkPool();
        $worker1 = $pool->get();
        $worker2 = $pool->get();

        $this->assertCount(2, $pool);
        $this->assertNotSame($worker1, $worker2);
    }

    /**
     * Объектный пул создаёт объекты и помещает их в кэш
     */
    public function testCanGetSameInstanceTwiceWhenDisposingItFirst(): void
    {
        $pool = new WorkPool();
        $worker1 = $pool->get();
        $pool->dispose($worker1);
        $worker2 = $pool->get();

        $this->assertCount(1, $pool);
        $this->assertSame($worker1, $worker2);
    }
}
