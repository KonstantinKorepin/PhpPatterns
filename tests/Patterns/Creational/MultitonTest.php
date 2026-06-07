<?php

namespace Tests\Patterns\Creational;

use App\Patterns\Creational\Multiton\DB;
use Tests\TestCase;

class MultitonTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $obj1 = DB::getInstance('first');
        $obj2 = DB::getInstance('first');
        $obj3 = DB::getInstance('second');
        $obj4 = DB::getInstance('second');

        $this->assertTrue(spl_object_hash($obj1) === spl_object_hash($obj2));
        $this->assertTrue($obj3->getName() === $obj4->getName());
        $this->assertTrue(spl_object_hash($obj3) === spl_object_hash($obj4));
    }
}
