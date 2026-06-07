<?php

namespace Tests\Patterns\Structure;

use App\Patterns\Structure\Composite\Component;
use App\Patterns\Structure\Composite\Composite;
use App\Patterns\Structure\Composite\Leaf;
use Tests\TestCase;

class CompositeTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $str = <<<EOD
RESULT: Leaf
RESULT: Branch(Branch(Leaf+Leaf)+Branch(Leaf))
RESULT: Branch(Branch(Leaf+Leaf)+Branch(Leaf)+Leaf)
EOD;

        $this->expectOutputString($str);

        /**
         * Таким образом, клиентский код может поддерживать простые компоненты-листья...
         */
        $simple = new Leaf();
        $this->clientCode($simple);
        echo "\n";

        /**
         * ...а также сложные контейнеры.
         */
        $tree = new Composite();
        $branch1 = new Composite();
        $branch1->add(new Leaf());
        $branch1->add(new Leaf());
        $branch2 = new Composite();
        $branch2->add(new Leaf());
        $tree->add($branch1);
        $tree->add($branch2);
        $this->clientCode($tree);
        echo "\n";

        $this->clientCode2($tree, $simple);
    }

    /**
     * Клиентский код работает со всеми компонентами через базовый интерфейс.
     */
    private function clientCode(Component $component)
    {
        // ...

        echo "RESULT: " . $component->operation();

        // ...
    }

    /**
     * Благодаря тому, что операции управления потомками объявлены в базовом классе
     * Компонента, клиентский код может работать как с простыми, так и со сложными
     * компонентами, вне зависимости от их конкретных классов.
     */
    private function clientCode2(Component $component1, Component $component2)
    {
        // ...

        if ($component1->isComposite()) {
            $component1->add($component2);
        }
        echo "RESULT: " . $component1->operation();

        // ...
    }
}
