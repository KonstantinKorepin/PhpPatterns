<?php

namespace Tests\Patterns\Fundamental;

use App\Patterns\Fundamental\ImmutableInterface\ImmutablePoint;
use App\Patterns\Fundamental\ImmutableInterface\Point;
use Tests\TestCase;

class ImmutableInterfaceTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $point = new Point();
        $point->setX(10);
        $point->setY(20);

        $this->assertTrue($point->getX() === 10);
        $this->assertTrue($point->getY() === 20);

        $point = new ImmutablePoint();
        $this->expectExceptionMessage('Method App\Patterns\Fundamental\ImmutableInterface\ImmutablePoint::setX does not exist.');
        $point->setX(10);
    }
}
