<?php

namespace App\Patterns\Structure\Filter;

class Laptop implements ILaptop
{
    /**
     * Процессор
     * @var string
     */
    private string $processor;

    /**
     * Оперативная память
     * @var int
     */
    private int $gb;

    /**
     * Операционная система
     * @var string
     */
    private string $os;

    public function __construct(
        string $processor,
        int $gb,
        string $os
    )
    {
        $this->processor = $processor;
        $this->gb = $gb;
        $this->os = $os;
    }

    public function getProcessor(): string
    {
        return $this->processor;
    }

    public function getGb(): int
    {
        return $this->gb;
    }

    public function getOs(): string
    {
        return $this->os;
    }
}
