<?php

namespace App\Patterns\Structure\Dto;

/**
 * В классе хранятся обязательные данные для конкретного варианта
 * использования и обеспечение просто сериализации.
 */
class UserDTO
{
    private string $_name;
    private string $_role;

    public function __construct(User $user)
    {
        $this->_name = $user->getName();
        $this->_role = $user->getRole();
    }

    public function getName(): string
    {
        return $this->_name;
    }

    public function getRole(): string
    {
        return $this->_role;
    }
}
