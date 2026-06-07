<?php

namespace Tests\Patterns\Creational;

use App\Patterns\Creational\StaticFactory\FormatNumber;
use App\Patterns\Creational\StaticFactory\FormatString;
use App\Patterns\Creational\StaticFactory\StaticFactory;
use InvalidArgumentException;
use Tests\TestCase;

class StaticFactoryTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testCanCreateNumberFormatter(): void
    {
        $this->assertInstanceOf(FormatNumber::class, StaticFactory::create('number'));
    }

    public function testCanCreateStringFormatter(): void
    {
        $this->assertInstanceOf(FormatString::class, StaticFactory::create('string'));
    }

    public function testException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        StaticFactory::create('object');
    }
}
