<?php

namespace Tests\Patterns\Structure;

use App\Patterns\Structure\Proxy\Proxy;
use App\Patterns\Structure\Proxy\RealSubject;
use App\Patterns\Structure\Proxy\Subject;
use Tests\TestCase;

class ProxyTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $str = <<<EOD
Client: Executing the client code with a real subject:
RealSubject: Handling request.

Client: Executing the same client code with a proxy:
Proxy: Checking access prior to firing a real request.
RealSubject: Handling request.
Proxy: Logging the time of request.

EOD;
        $this->expectOutputString($str);

        echo "Client: Executing the client code with a real subject:\n";
        $realSubject = new RealSubject();
        $this->clientCode($realSubject);

        echo "\n";

        echo "Client: Executing the same client code with a proxy:\n";
        $proxy = new Proxy($realSubject);
        $this->clientCode($proxy);
    }


    /**
     * Клиентский код должен работать со всеми объектами (как с реальными, так и
     * заместителями) через интерфейс Субъекта, чтобы поддерживать как реальные
     * субъекты, так и заместителей. В реальной жизни, однако, клиенты в основном
     * работают с реальными субъектами напрямую. В этом случае, для более простой
     * реализации паттерна, можно расширить заместителя из класса реального
     * субъекта.
     */
    private function clientCode(Subject $subject)
    {
        // ...

        $subject->request();

        // ...
    }
}
