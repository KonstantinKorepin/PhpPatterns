<?php

namespace Tests\Patterns\Behavioral;

use App\Patterns\Behavioral\PublisherSubscriber\ChatRoom;
use Tests\TestCase;

class PublisherSubscriberTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $str = <<<EOD
Test msg!!!

EOD;

        $this->expectOutputString($str);

        $context = new ChatRoom();
        $context->sendMessage('Test msg!!!');
    }
}
