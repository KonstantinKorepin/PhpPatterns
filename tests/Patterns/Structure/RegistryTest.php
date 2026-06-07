<?php

namespace Tests\Patterns\Structure;

use App\Patterns\Structure\Registry\Registry;
use App\Patterns\Structure\Registry\Service;
use InvalidArgumentException;
use PHPUnit\Framework\MockObject\MockObject;
use Tests\TestCase;

class RegistryTest extends TestCase
{
    private MockObject $service;
    protected function setUp(): void
    {
        $this->service = $this->getMockBuilder(Service::class)->getMock();
    }

    public function testSetAndGetLogger()
    {
        Registry::set(Registry::LOGGER, $this->service);
        $this->assertSame($this->service, Registry::get(Registry::LOGGER));
    }

    public function testThrowsExceptionWhenTryingToSetInvalidKey()
    {
        $this->expectException(InvalidArgumentException::class);
        Registry::set('foobar', $this->service);
    }

    public function testThrowsExceptionWhenTryingToGetNotSetKey()
    {
        $this->assertTrue($this->service instanceof MockObject);
        $this->assertTrue(Registry::get(Registry::LOGGER) instanceof MockObject);
    }
}
