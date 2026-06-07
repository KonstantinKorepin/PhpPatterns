<?php

namespace App\Patterns\Fundamental\PropertyContainer;

interface IMovie
{
    public function getTitle(): string;
    public function setTitle(string $title): void;
}
