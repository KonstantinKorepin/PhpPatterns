<?php

namespace App\Patterns\Behavioral\State1;

class ScreenOnState
{
    private $screen;

    public function __construct($screen)
    {
        $this->screen = $screen;
    }

    public function touch()
    {
        $this->screen->notify('touch');
    }

    public function swipe()
    {
        $this->screen->notify('swipe');
    }
}
