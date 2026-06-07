<?php

namespace App\Patterns\Behavioral\NullObject;

interface Logger
{
    public function log(string $str): void;
}
