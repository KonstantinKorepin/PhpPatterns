<?php

namespace App\Patterns\Fundamental\PropertyContainer;

class PropertyContainer implements IPropertyContainer
{
    /**
     * Extensible properties
     *
     * @var array
     */
    private array $properties = [];

    /**
     * @param string $propertyName
     * @param string $propertyValue
     * @return void
     */
    public function setProperty(string $propertyName, string $propertyValue): void
    {
        $this->properties[$propertyName] = $propertyValue;
    }

    /**
     * @param string $propertyName
     * @return string|null
     */
    public function getProperty(string $propertyName): ?string
    {
        return $this->properties[$propertyName] ?? null;
    }

    /**
     * @param string $propertyName
     * @return void
     */
    public function removeProperty(string $propertyName): void
    {
        unset($this->properties[$propertyName]);
    }
}
