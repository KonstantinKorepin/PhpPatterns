<?php

namespace Tests\Patterns\Fundamental;

use App\Patterns\Fundamental\EventChannel\EventChannel;
use App\Patterns\Fundamental\EventChannel\Publisher;
use App\Patterns\Fundamental\EventChannel\Subscriber;
use Tests\TestCase;

class EventChannelTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $eventChannel = new EventChannel();

        // Определили издателей
        $publisherRbk = new Publisher('business-news', $eventChannel);
        $publisherVk = new Publisher('social-news', $eventChannel);
        $publisherInstagram = new Publisher('photo', $eventChannel);

        // Определили подписчиков
        $subscriberOne = new Subscriber('Alexander Nevsky');
        $subscriberTwo = new Subscriber('Mikhail Lomonosov');
        $subscriberThree = new Subscriber('Yuri Gagarin');

        // Подписки
        $eventChannel->subscribe('business-news', $subscriberOne);
        $eventChannel->subscribe('photo', $subscriberOne);
        $eventChannel->subscribe('social-news', $subscriberTwo);
        $eventChannel->subscribe('social-news', $subscriberThree);

        // Публикуем контент
        $publisherRbk->publish('first content');
        $publisherRbk->publish('second content');
        $publisherVk->publish('some news');
        $publisherInstagram->publish('some photos');
    }
}
