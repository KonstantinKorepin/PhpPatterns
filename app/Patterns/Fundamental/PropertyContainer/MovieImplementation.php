<?php

namespace App\Patterns\Fundamental\PropertyContainer;

class MovieImplementation extends PropertyContainer implements IMovie
{
    private string $title = "";

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}
