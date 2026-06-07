<?php

namespace Tests\Patterns\Structure;

use App\Patterns\Structure\InterceptingFilter\Request;
use App\Patterns\Structure\InterceptingFilter\RequestHandler;
use App\Patterns\Structure\InterceptingFilter\Response;
use Tests\TestCase;

class InterceptingFilterTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $str = <<<EOD
Debugging filter run
Execute processor filter
Main request handler run

EOD;

        $this->expectOutputString($str);

        // Вызываем объект эмулирования запроса
        (new RequestHandler())->processRequest(new Request(), new Response());
    }
}
