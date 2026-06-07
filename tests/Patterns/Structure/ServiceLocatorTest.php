<?php

namespace Tests\Patterns\Structure;

use App\Patterns\Structure\ServiceLocator\LogService;
use App\Patterns\Structure\ServiceLocator\ServiceLocator;
use Tests\TestCase;

/**
 * Сервис-локатор сохраняет созданный объект с переданными
 * ему аргументами и можно получать доступ к этим объектам
 * из объекта локатора
 */
class ServiceLocatorTest extends TestCase
{
    private ServiceLocator $serviceLocator;

    protected function setUp(): void
    {
        $this->serviceLocator = new ServiceLocator();
    }

    public function testHasServices(): void
    {
        $this->serviceLocator->addInstance(LogService::class, new LogService());

        $this->assertTrue($this->serviceLocator->has(LogService::class));
        $this->assertFalse($this->serviceLocator->has(self::class));
    }

    public function testGetWillInstantiateLogServiceIfNoInstanceHasBeenCreatedYet(): void
    {
        $this->serviceLocator->addClass(LogService::class, []);
        $logger = $this->serviceLocator->get(LogService::class);

        $this->assertInstanceOf(LogService::class, $logger);
    }
}
