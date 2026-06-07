<?php

namespace App\Patterns\Structure\BusinessDelegate;

/**
 * Клиент, использующий для выполнения задачи бизнес-делегат
 */
class Client
{
    private BusinessDelegate $businessService;

    public function __construct(BusinessDelegate $businessService)
    {
        $this->businessService = $businessService;
    }

    /**
     * Передаёт выполнение бизнес-делегату
     * @return void
     */
    public function doTask(): void
    {
        $this->businessService->doTask();
    }
}
