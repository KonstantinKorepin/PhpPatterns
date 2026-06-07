<?php

namespace App\Patterns\Fundamental\PropertyContainer;

interface IPropertyContainer
{
    /**
     * @param string $propertyName
     * @param string $propertyValue
     * @return mixed
     */
    public function setProperty(string $propertyName, string $propertyValue): void;

    /**
     * @param string $propertyName
     * @return string|null
     */
    public function getProperty(string $propertyName): ?string;

    /**
     * @param string $propertyName
     * @return mixed
     */
    public function removeProperty(string $propertyName): void;
}
