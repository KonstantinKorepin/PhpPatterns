<?php

namespace Tests\Patterns\Fundamental;

use App\Patterns\Fundamental\Interface\InterfacePattern;
use Tests\TestCase;

class InterfaceTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $str = "product_1
product_2
product_3
product_4
product_5
";
        $this->expectOutputString($str);
        InterfacePattern::orderAllProducts('product_5');
    }
}
