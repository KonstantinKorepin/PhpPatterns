<?php

namespace App\Patterns\Structure\BusinessDelegate;

/**
 * Служба поиска
 */
class BusinessLookUp
{
    public function getBusinessService($serviceType): BusinessService
    {
        if ($serviceType === 'first') {
            return new ConcreteService1();
        }
        return new ConcreteService2();
    }
}
