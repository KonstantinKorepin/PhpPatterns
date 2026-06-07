<?php

namespace App\Patterns\Structure\Dto;

/**
 * Класс предметной области. Представляет каркас классов, которые
 * могут составлять другие объекты так, что сериализация
 * применяется ко всем объектам.
 *
 * ORM обычно нарушает восставновление графа объекта, помещая их
 * в ленивую загрузку.
 */
class User
{
    private string $_name;

    private string $_role;
    private array $_groups = [];

    public function getName(): string
    {
        return $this->_name;
    }

    public function setName(string $name): void
    {
        $this->_name = $name;
    }

    public function getRole(): string
    {
        return $this->_role;
    }

    public function setRole(string $role): void
    {
        $this->_role = $role;
    }

    public function getGroups(): array
    {
        return $this->_groups;
    }

    public function addGroup(Group $group): void
    {
        $this->_groups[] = $group;
    }
}
