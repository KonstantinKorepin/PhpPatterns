<?php

namespace Tests\Patterns\Structure;

use App\Patterns\Structure\PipesAndFilter\Clothes;
use App\Patterns\Structure\PipesAndFilter\Modifier;
use Tests\TestCase;

class PipesAndFilterTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $str = <<<EOD
Iron process...
Shoulder process...
Iron process...
Shoulder process...
ThreadNeedle process...

EOD;

        $this->expectOutputString($str);

        // Подготовим данные
        $chunkOne = [
            new Clothes(),
            (new Clothes())->setIron(),
            (new Clothes())->setShoulders()
        ];

        $chunkTwo = [
            (new Clothes())->setIron(),
            (new Clothes())->setShoulders()->setThreadNeed()
        ];

        // Запускаем первую партию
        $modifier = new Modifier();
        $modifier->modify($chunkOne);

        // Второй набор
        $modifier->modify($chunkTwo);
    }
}
