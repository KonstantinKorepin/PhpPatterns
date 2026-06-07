<?php

namespace App\Patterns\Structure\ServiceLocator;

use InvalidArgumentException;

/**
 * Основной класс сервис-локатора
 */
class ServiceLocator
{
    /**
     * @var string[][]
     */
    private array $services = [];

    /**
     * @var Service[]
     */
    private array $instantiated = [];

    /**
     * Добавление инстанса в локатор
     *
     * @param string $class
     * @param Service $service
     * @return void
     */
    public function addInstance(string $class, Service $service)
    {
        $this->instantiated[$class] = $service;
    }

    /**
     * Добавление класса в локатор
     *
     * @param string $class
     * @param array $params
     * @return void
     */
    public function addClass(string $class, array $params)
    {
        $this->services[$class] = $params;
    }

    /**
     * Проверяет наличие переведенного класса или объекта класса
     * @param string $interface
     * @return bool
     */
    public function has(string $interface): bool
    {
        return isset($this->services[$interface]) || isset($this->instantiated[$interface]);
    }

    /**
     * Возвращает класс или сервис-локатор или создаёт новый объект класса,
     * сохраняя его в локатор
     * @param string $class
     * @return Service
     */
    public function get(string $class): Service
    {
        if (isset($this->instantiated[$class])) {
            return $this->instantiated[$class];
        }

        $args = $this->services[$class];
        switch (count($args)) {
            case 0:
                $object = new $class();
            break;
            case 1:
                $object = new $class($args[0]);
            break;
            case 2:
                $object = new $class($args[0], $args[1]);
            break;
            case 3:
                $object = new $class($args[0], $args[1], $args[2]);
            break;
            default:
                throw new \OutOfBoundsException('Too many arguments given');
        }

        if (!$object instanceof Service) {
            throw new InvalidArgumentException('Could not register service: is no instance of Service');
        }

        $this->instantiated[$class] = $object;
        return $object;
    }
}
