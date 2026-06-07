<?php

namespace Tests\Patterns\Behavioral;

use App\Patterns\Behavioral\Servant\Ellipse;
use App\Patterns\Behavioral\Servant\MoveServant;
use App\Patterns\Behavioral\Servant\Position;
use App\Patterns\Behavioral\Servant\Triagle;
use Tests\TestCase;

class ServantTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $str = <<<EOD
1
2
3
4
5
6
8
9

EOD;

        $this->expectOutputString($str);

        $figure = new Triagle();
        $figure->setPosition(new Position(1, 2));

        $figure2 = new Ellipse();
        $figure2->setPosition(new Position(3, 4));

        echo $figure->getPosition()->xPosition . PHP_EOL;
        echo $figure->getPosition()->yPosition . PHP_EOL;

        echo $figure2->getPosition()->xPosition . PHP_EOL;
        echo $figure2->getPosition()->yPosition . PHP_EOL;

        $servant = new MoveServant();
        $servant->moveTo($figure, new Position(5, 6));
        $servant->moveBy($figure2, 5,5);

        echo $figure->getPosition()->xPosition . PHP_EOL;
        echo $figure->getPosition()->yPosition . PHP_EOL;

        echo $figure2->getPosition()->xPosition . PHP_EOL;
        echo $figure2->getPosition()->yPosition . PHP_EOL;
    }
}
