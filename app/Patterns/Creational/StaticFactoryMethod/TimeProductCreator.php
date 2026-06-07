<?php

namespace App\Patterns\Creational\StaticFactoryMethod;

class TimeProductCreator
{
    public static function getTomorrow(): TimeProduct
    {
        return new TimeProduct(strtotime('tomorrow'));
    }

    public static function getToday(): TimeProduct
    {
        return new TimeProduct(strtotime('today'));
    }
}
