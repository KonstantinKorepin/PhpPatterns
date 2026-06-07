<?php

namespace App\Patterns\Creational\ObjectPool;

use DateTime;

class StringReverseWorker
{
    private DateTime $createdAt;

    public function __construct()
    {
        $this->createdAt = new DateTime();
    }

    /**
     * @param string $text
     * @return string
     */
    public function run(string $text): string
    {
        return strrev($text);
    }

}
