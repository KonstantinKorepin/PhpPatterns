<?php

namespace App\Patterns\Structure\BindingProperties;

use Closure;
interface IMenu
{
    public function setProperty(string $propertyName, int $val): void;
    public function getProperty(string $name): int;
}
