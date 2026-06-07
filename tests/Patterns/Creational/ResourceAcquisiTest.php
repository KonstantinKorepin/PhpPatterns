<?php

namespace Tests\Patterns\Creational;

use App\Patterns\Creational\ResourceAcquisi\FileGuard;
use Tests\TestCase;

class ResourceAcquisiTest extends TestCase
{
    public function test_example(): void
    {
        $file = new FileGuard("test.txt");
        $file->write("test string");

        try {
            $file2 = new FileGuard("test.txt");
            $file2->write("test string 2");
        } catch (\Exception $ex) {
            // Обеспечиваем освобождение ресурса при недоступности
            unset($file);
        }

        $file3 = new FileGuard("test.txt");
        $file3->write("test string 3");
    }
}
