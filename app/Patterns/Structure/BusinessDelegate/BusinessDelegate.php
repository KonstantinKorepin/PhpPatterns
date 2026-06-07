<?php

namespace App\Patterns\Structure\BusinessDelegate;

/**
 * Реализует шаблон Бизнес-делегат
 */
class BusinessDelegate
{
    private BusinessLookUp $lookUpService;
    private string $serviceType;

    public function __construct()
    {
        $this->lookUpService = new BusinessLookUp();
    }

    /**
     * Устанавливает тип сервиса
     * @param string $serviceType
     * @return void
     */
    public function setServiceType(string $serviceType): void
    {
        $this->serviceType = $serviceType;
    }

    /**
     * Выполняет делегирование
     * @return void
     */
    public function doTask(): void
    {
        $businessService = $this->lookUpService->getBusinessService($this->serviceType);
        $businessService->doProcessing();
    }
}
