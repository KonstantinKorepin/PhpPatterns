<?php

namespace Tests\Patterns\Structure;

use App\Patterns\Structure\Adapter1\EmailNotification;
use App\Patterns\Structure\Adapter1\Notification;
use App\Patterns\Structure\Adapter1\SlackApi;
use App\Patterns\Structure\Adapter1\SlackNotification;
use Tests\TestCase;

class Adapter1Test extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        echo "Client code is designed correctly and works with email notifications:\n";
        $notification = new EmailNotification("developers@example.com");
        $this->assertTrue($this->clientCode($notification) === "Sent email with title 'Website is down!' to 'developers@example.com' that says '<strong style='color:red;font-size: 50px;'>Alert!</strong> Our website is not responding. Call admins and bring it up!'.");

        echo "The same client code can work with other classes via adapter:\n";
        $slackApi = new SlackApi("example.com", "XXXXXXXX");
        $notification = new SlackNotification($slackApi, "Example.com Developers");
        $this->assertTrue($this->clientCode($notification) === "Posted following message into the 'Example.com Developers' chat: '#Website is down!# Alert! Our website is not responding. Call admins and bring it up!'.\n");
    }

    /**
     * Клиентский код работает с классами, которые следуют Целевому интерфейсу.
     */
    private function clientCode(Notification $notification): string
    {
        // ...

        return $notification->send("Website is down!",
            "<strong style='color:red;font-size: 50px;'>Alert!</strong> " .
            "Our website is not responding. Call admins and bring it up!");

        // ...
    }
}
