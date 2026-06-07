<?php

namespace Tests\Patterns\Behavioral;

use App\Patterns\Behavioral\State1\MobileScreen;
use Tests\TestCase;

class State1Test extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $screen = new MobileScreen();
        $screen->touch();

        $screen->powerOn();
        $screen->touch();
        $screen->swipe();

        $this->assertTrue(true);
    }
}
