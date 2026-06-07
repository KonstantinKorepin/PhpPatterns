<?php

namespace Tests\Patterns\Creational;

use App\Patterns\Creational\LazyInitialization\LazyUrl;
use Tests\TestCase;

class LazyInitializationTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $url = "https://www.google.com/doodles";
        $urlParser = new LazyUrl($url);

        $this->assertTrue($urlParser->getDomain() === 'www.google.com');
    }
}
