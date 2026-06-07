<?php

namespace App\Patterns\Structure\BindingProperties;

use Closure;

class BaseMenu implements IMenu
{
    protected int $property;

    /**
     * Установка переменных
     *
     * @param string $propertyName
     * @param int $val
     * @return void
     */
    public function setProperty(string $propertyName, int $val): void
    {
        $bindObject = BindProp::getBindObject($this);
        $bindClosure = $this->bindSetProperty($propertyName, $val);

        $bind1 = $bindClosure->bindTo($this, $this);
        $bind2 = $bindClosure->bindTo($bindObject, $bindObject);

        $bind1();
        $bind2();
    }

    /**
     * @param string $name
     * @return int
     */
    public function getProperty(string $name): int
    {
        return $this->property;
    }

    /**
     * Байндим установку переменных
     *
     * @param string $propertyName
     * @param int $val
     * @return Closure
     */
    public function bindSetProperty(string $propertyName, int $val): Closure
    {
        return function () use ($propertyName, $val) {
            $this->$propertyName = $val;
        };
    }
}
