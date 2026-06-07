<?php

namespace App\Patterns\Structure\DependencyInjection;

interface IConfiguration
{
    public function getHost(): string;
    public function getPort(): string;
    public function getUsername(): string;
    public function getPassword(): string;
}
