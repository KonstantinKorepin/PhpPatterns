<?php

namespace Tests\Patterns\Fundamental;

use App\Patterns\Fundamental\ImmutableObject\ImmutableMoney;
use App\Patterns\Fundamental\ImmutableObject\Money;
use Tests\TestCase;

class ImmutableObjectTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testMutableObject(): void
    {
        $userAmount = new Money(2);

        $processedAmount = $userAmount->add($userAmount->getAmount() * 0.03);

        $this->assertTrue($processedAmount->getAmount() === 2.06);
        $this->assertTrue($userAmount->getAmount() === 2.06);
    }

    public function testImmutableObject(): void
    {
        $userAmount = new ImmutableMoney(2);

        $processedAmount = $userAmount->add($userAmount->getAmount() * 0.03);

        $this->assertTrue($processedAmount->getAmount() === 2.06);
        $this->assertTrue($userAmount->getAmount() == 2);
    }
}
