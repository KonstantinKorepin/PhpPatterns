<?php

namespace App\Patterns\Behavioral\State1;

class PowerOffState
{
    private $screen;

    public function __construct($screen)
    {
        $this->screen = $screen;
    }

    public function touch()
    {
        // ничего не происходит
    }

    public function swipe()
    {
        // ничего не происходит
    }
}
