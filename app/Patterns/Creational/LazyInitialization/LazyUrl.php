<?php

namespace App\Patterns\Creational\LazyInitialization;

class LazyUrl
{
    private string $domain;
    private string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function getDomain(): string
    {
        if (empty($this->domain)) {
            $this->domain = (string) parse_url($this->url, 1);
        }
        return $this->domain;
    }
}
