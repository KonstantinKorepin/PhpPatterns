<?php

namespace Tests\Patterns\Fundamental;

use App\Patterns\Fundamental\Delegation\Delegator;
use Tests\TestCase;

class DelegationTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $delegator = new Delegator();

        $delegator->byRemoteHostA()->setHost('HOST 1');
        echo $delegator->getHost();

        $delegator->byRemoteHostB()->setHost('HOST 2');
        echo $delegator->getHost();
    }
}
