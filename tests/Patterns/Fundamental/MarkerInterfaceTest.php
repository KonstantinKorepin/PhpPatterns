<?php

namespace Tests\Patterns\Fundamental;

use App\Patterns\Fundamental\MarkerInterface\IMarkerInterface;
use App\Patterns\Fundamental\MarkerInterface\Mutable;
use App\Patterns\Fundamental\MarkerInterface\MutableWithMarker;
use Tests\TestCase;

class MarkerInterfaceTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $collection = [
            new Mutable(10),
            new Mutable(10),
            new Mutable(10),
            new MutableWithMarker(10),
            new MutableWithMarker(10),
            new MutableWithMarker(10)
        ];

        $total = 0;
        foreach ($collection as $item) {
            if ($item instanceof IMarkerInterface) {
                $item->setX(20);
            }
            $total += $item->getX();
        }

        $this->assertTrue($total === 90);
    }
}
