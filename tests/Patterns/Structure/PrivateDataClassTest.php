<?php

namespace Tests\Patterns\Structure;

use Tests\TestCase;

class PrivateDataClassTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
