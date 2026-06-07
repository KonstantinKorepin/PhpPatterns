<?php

namespace App\Patterns\Structure\DependencyInjection;

class DatabaseConfiguration implements IConfiguration
{
    public function __construct(
        private string $host,
        private string $port,
        private string $username,
        private string $password
    )
    {
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function getPort(): string
    {
        return $this->port;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}
