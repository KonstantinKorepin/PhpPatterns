<?php

namespace Tests\Patterns\Structure;

use App\Patterns\Structure\ValueListHandler\ProjectListHandler;
use App\Patterns\Structure\ValueListHandler\ProjectTO;
use Tests\TestCase;

class ValueListHandlerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {

        $str = <<<EOD
Execute sql:SELECT id,name,descriptionFROM projects WHERE 1 = 1 AND id = '0' AND name = 'name'
0 description_0
1 description_1
2 description_2
3 description_3
4 description_4

EOD;
        $this->expectOutputString($str);

        // Выставляем критерии поиска
        $criteria = new ProjectTO();
        $criteria->setId(0);
        $criteria->setName('name');

        // Используем шаблон списка значений
        $handler = new ProjectListHandler($criteria);

        // Выводим список найденных проектов
        /** @var ProjectTO $project */
        foreach ($handler as $project) {
            echo $project->getId() . ' ' . $project->getName() . PHP_EOL;
        }
    }
}
