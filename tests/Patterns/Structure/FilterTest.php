<?php

namespace Tests\Patterns\Structure;

use App\Patterns\Structure\Filter\AndCriteria;
use App\Patterns\Structure\Filter\FourGBRam;
use App\Patterns\Structure\Filter\I7Processor;
use App\Patterns\Structure\Filter\Laptop;
use App\Patterns\Structure\Filter\Mac;
use Tests\TestCase;

class FilterTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $laptops = [
            new Laptop('i9', 8, 'Windows'),
            new Laptop('i7', 4, 'Windows'),
            new Laptop('i7', 4, 'MAC'),
            new Laptop('i5', 4, 'MAC'),
            new Laptop('i5', 8, 'MAC'),
        ];

        // Получаем критерии для фильтрации
        $criteria = new AndCriteria([
            new I7Processor(),
            new FourGBRam(),
            new Mac()
        ]);

        // Получаем отфильтрованные объекты
        $filteredLaptops = $criteria->meets($laptops);

        $this->assertTrue(count($filteredLaptops) === 1);
        $this->assertTrue($filteredLaptops[0]->getProcessor() == 'i7');
        $this->assertTrue($filteredLaptops[0]->getGb() == 4);
    }
}
