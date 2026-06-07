<?php

namespace App\Patterns\Creational\Builder1;

class BurgerBuilder
{
    public $size;
    public $cheese = false;
    public $pepperoni = false;
    public $lettuce = false;
    public $tomato = false;
    public function __construct(int $size)
    {
        $this->size = $size;
    }
    public function addcheese()
    {
        $this->cheese = true;
        return $this;
    }
    public function addPepperoni()
    {
        $this->pepperoni = true;
        return $this;
    }
    public function addLettuce()
    {
        $this->lettuce = true;
        return $this;
    }
    public function addTomato()
    {
        $this->tomato = true;
        return $this;
    }
    public function build(): Burger
    {
        return new Burger($this);
    }
}
