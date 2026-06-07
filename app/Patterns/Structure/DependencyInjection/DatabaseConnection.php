<?php

namespace App\Patterns\Structure\DependencyInjection;

class DatabaseConnection
{
    public function __construct(
        private IConfiguration $configuration
    )
    {
    }

    public function getDsn(): string
    {
        return sprintf('%s:%s@%s:%d',
            $this->configuration->getUsername(),
            $this->configuration->getPassword(),
            $this->configuration->getHost(),
            $this->configuration->getPort()
        );
    }
}
