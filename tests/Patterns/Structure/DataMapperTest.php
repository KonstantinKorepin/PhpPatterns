<?php

namespace Tests\Patterns\Structure;

use App\Patterns\Structure\DataMapper\StorageAdapter;
use App\Patterns\Structure\DataMapper\User;
use App\Patterns\Structure\DataMapper\UserMapper;
use InvalidArgumentException;
use Tests\TestCase;

class DataMapperTest extends TestCase
{
    public function testCanMapUserFromStorage()
    {
        $storage = new StorageAdapter([1 => ['username' => 'someone', 'email' => 'someone@example.com']]);
        $mapper = new UserMapper($storage);
        $user = $mapper->findById(1);
        $this->assertInstanceOf(User::class, $user);
    }

    public function testWillNotMapInvalidData()
    {
        $this->expectException(InvalidArgumentException::class);

        $storage = new StorageAdapter([]);
        $mapper = new UserMapper($storage);
        $mapper->findById(1);
    }
}
