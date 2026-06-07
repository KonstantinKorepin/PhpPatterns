<?php

namespace App\Patterns\Behavioral\State1;

class ScreenDisabledState
{
    private $screen;

    public function __construct($screen)
    {
        $this->screen = $screen;
    }

    public function touch()
    {
        // Включаем экран. В конструктор нужно передать сам экран.
        $this->screen->state = new ScreenOnState($this->screen);
        // Оповещаем текущую программу об активации
        $this->screen->notify('touch');
    }

    public function swipe()
    {
        // ничего не происходит
    }
}
