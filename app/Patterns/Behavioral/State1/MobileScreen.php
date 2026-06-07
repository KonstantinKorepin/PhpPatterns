<?php

namespace App\Patterns\Behavioral\State1;

class MobileScreen
{
    public $state;

    public function __construct()
    {
        // Начальное состояние
        // Внутрь передается текущий объект
        // Это нужно для смены состояний (примеры ниже)
        $this->state = new PowerOffState($this);
    }

    public function notify($message)
    {
        echo $message.PHP_EOL;
    }

    public function powerOn()
    {
        // Предыдущее состояние нас не волнует
        // Все данные хранятся в самом экране
        // Объекты-состояния не имеют своих данных
        $this->state = new ScreenDisabledState($this);
    }

    public function touch()
    {
        $this->state->touch();
    }

    public function swipe()
    {
        $this->state->swipe();
    }
}
