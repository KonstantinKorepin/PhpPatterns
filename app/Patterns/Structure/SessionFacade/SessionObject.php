<?php

namespace App\Patterns\Structure\SessionFacade;

/**
 * Эмулирует работу с сессионными данными
 */
class SessionObject
{
    /**
     * Метод получает из сессии необходимые данные и инициализирует создание
     * сессионного объекта
     * @return self
     */
    public static function getSessionData(): self
    {
        return new SessionObject();
    }

}
