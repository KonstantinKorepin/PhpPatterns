<?php

namespace App\Patterns\Behavioral\NullObject;

class NullLogger implements Logger
{

    public function log(string $str): void
    {
        // do nothing
    }
}
