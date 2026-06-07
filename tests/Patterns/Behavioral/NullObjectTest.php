<?php

namespace Tests\Patterns\Behavioral;

use App\Patterns\Behavioral\NullObject\NullLogger;
use App\Patterns\Behavioral\NullObject\PrintLogger;
use App\Patterns\Behavioral\NullObject\Service;
use Tests\TestCase;

class NullObjectTest extends TestCase
{
    public function testNullObject()
    {
        $service = new Service(new NullLogger());
        $this->expectOutputString('');
        $service->doSomething();
    }

    public function testStandardLogger()
    {
        $service = new Service(new PrintLogger());
        $this->expectOutputString('We are in App\Patterns\Behavioral\NullObject\Service::doSomething');
        $service->doSomething();
    }
}
