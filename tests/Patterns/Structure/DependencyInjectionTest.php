<?php

namespace Tests\Patterns\Structure;

use App\Patterns\Structure\DependencyInjection\DatabaseConfiguration;
use App\Patterns\Structure\DependencyInjection\DatabaseConnection;
use Tests\TestCase;

class DependencyInjectionTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'root', 'password');
        $connection = new DatabaseConnection($config);

        $this->assertSame('root:password@localhost:3306', $connection->getDsn());
    }
}
