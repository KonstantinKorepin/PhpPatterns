<?php

namespace Tests\Patterns\Structure;

use App\Patterns\Structure\Dto\Group;
use App\Patterns\Structure\Dto\User;
use App\Patterns\Structure\Dto\UserDTO;
use Tests\TestCase;

class DtoTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $user = new User();
        $user->setName('Giorgio');
        $user->setRole('Author');
        $user->addGroup(new Group('Authors'));
        $user->addGroup(new Group('Editors'));

        $dto = new UserDTO($user);
        $data = var_export(serialize($dto), true);

        $expected =
            '\'O:34:"App\\\\Patterns\\\\Structure\\\\Dto\\\\UserDTO":2:{s:41:"\''
            . ' . "\\0" . '
            . '\'App\\\\Patterns\\\\Structure\\\\Dto\\\\UserDTO\''
            . ' . "\\0" . '
            . '\'_name";s:7:"Giorgio";s:41:"\''
            . ' . "\\0" . '
            . '\'App\\\\Patterns\\\\Structure\\\\Dto\\\\UserDTO\''
            . ' . "\\0" . '
            . '\'_role";s:6:"Author";}\'';

        $this->assertTrue($data === $expected);
    }
}
