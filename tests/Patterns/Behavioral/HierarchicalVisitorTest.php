<?php

namespace Tests\Patterns\Behavioral;

use App\Patterns\Behavioral\HierarchicalVisitor\App;
use Tests\TestCase;

class HierarchicalVisitorTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $str = <<<EOD
Boss/HR Manager/HR 1
Boss/HR Manager/HR 2
Boss/HR Manager/HR 3
Boss/Sales Manager/Sales 1
Boss/Sales Manager/Sales 2
Boss/Sales Manager/Sales 3
Boss/Sales Manager/Sales 4
108000

EOD;

        $this->expectOutputString($str);

        App::main([]);

    }
}
