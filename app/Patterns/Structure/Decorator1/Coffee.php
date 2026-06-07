<?php

namespace App\Patterns\Structure\Decorator1;

interface Coffee
{
    public function getCost(): int;
    public function getDescription(): string;
}
