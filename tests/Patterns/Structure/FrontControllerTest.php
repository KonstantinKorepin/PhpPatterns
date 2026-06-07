<?php

namespace Tests\Patterns\Structure;

use App\Patterns\Structure\FrontController\FrontController;
use Tests\TestCase;

class FrontControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $str = <<<EOD
Page requested: HONE
User is authenticated successfully.Displaying Home Page
Page requested: STUDENT
User is authenticated successfully.Displaying Student Page

EOD;

        $this->expectOutputString($str);

        // Единый контроллер пропускает все запросы через себя
        $frontController = new FrontController();
        $frontController->dispatchRequest('HONE');
        $frontController->dispatchRequest('STUDENT');
    }
}
