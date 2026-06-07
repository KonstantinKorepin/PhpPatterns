<?php

namespace Tests\Patterns\Structure;

use App\Patterns\Structure\FluentInterface\Sql;
use Tests\TestCase;

class FluentInterfaceTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $query = (new Sql())
            ->select(['foo', 'bar'])
            ->from('foobar', 'f')
            ->where('f.bar = ?');

        $this->assertSame('SELECT foo, bar FROM foobar AS f WHERE f.bar = ?', (string) $query);
    }
}
