<?php

namespace Tests\Patterns\Structure;

use App\Patterns\Structure\Flyweight\FlyweightFactory;
use Tests\TestCase;

class FlyweightTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $str = <<<EOD

FlyweightFactory: I have 5 flyweights:
Chevrolet_Camaro2018_pink
Mercedes Benz_C300_black
Mercedes Benz_C500_red
BMW_M5_red
BMW_X6_white

Client: Adding a car to database.
FlyweightFactory: Reusing existing flyweight.
Flyweight: Displaying shared (["BMW","M5","red"]) and unique (["CL234IR","James Doe"]) state.

Client: Adding a car to database.
FlyweightFactory: Can't find a flyweight, creating new one.
Flyweight: Displaying shared (["BMW","X1","red"]) and unique (["CL234IR","James Doe"]) state.

FlyweightFactory: I have 6 flyweights:
Chevrolet_Camaro2018_pink
Mercedes Benz_C300_black
Mercedes Benz_C500_red
BMW_M5_red
BMW_X6_white
BMW_X1_red

EOD;

        $this->expectOutputString($str);

        /**
         * Клиентский код обычно создает кучу предварительно заполненных легковесов на
         * этапе инициализации приложения.
         */
        $factory = new FlyweightFactory([
            ["Chevrolet", "Camaro2018", "pink"],
            ["Mercedes Benz", "C300", "black"],
            ["Mercedes Benz", "C500", "red"],
            ["BMW", "M5", "red"],
            ["BMW", "X6", "white"],
            // ...
        ]);
        $factory->listFlyweights();

        $this->addCarToPoliceDatabase($factory,
            "CL234IR",
            "James Doe",
            "BMW",
            "M5",
            "red",
        );

        $this->addCarToPoliceDatabase($factory,
            "CL234IR",
            "James Doe",
            "BMW",
            "X1",
            "red",
        );

        $factory->listFlyweights();
    }

    private function addCarToPoliceDatabase(
        FlyweightFactory $ff, $plates, $owner,
                         $brand, $model, $color
    ) {
        echo "\nClient: Adding a car to database.\n";
        $flyweight = $ff->getFlyweight([$brand, $model, $color]);

        // Клиентский код либо сохраняет, либо вычисляет внешнее состояние и
        // передает его методам легковеса.
        $flyweight->operation([$plates, $owner]);
    }
}
