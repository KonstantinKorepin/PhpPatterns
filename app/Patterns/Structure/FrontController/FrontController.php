<?php

namespace App\Patterns\Structure\FrontController;

class FrontController
{
    private Dispatcher $dispatcher;

    public function __construct()
    {
        // композиция диспетчера запросов
        $this->dispatcher = new Dispatcher();
    }

    /**
     * Авторизован ли запрос
     */
    private function isAuthenticUser(): bool
    {
        echo "User is authenticated successfully.";
        return true;
    }

    /**
     * Лог
     * @param string $request
     * @return void
     */
    private function trackRequest(string $request): void
    {
        echo 'Page requested: ' . $request . PHP_EOL;
    }

    public function dispatchRequest(string $request): void
    {
        // log each request
        $this->trackRequest($request);
        // authenticate the user
        if ($this->isAuthenticUser()) {
            $this->dispatcher->dispatch($request);
        }
    }
}
