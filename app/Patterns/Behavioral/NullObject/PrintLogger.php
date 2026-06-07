<?php

namespace App\Patterns\Behavioral\NullObject;

class PrintLogger implements Logger
{

    public function log(string $str): void
    {
        echo $str;
    }
}
