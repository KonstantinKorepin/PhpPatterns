<?php

namespace Tests\Patterns\Structure;

use App\Patterns\Structure\BindingProperties\BindProp;
use App\Patterns\Structure\BindingProperties\Menu;
use App\Patterns\Structure\BindingProperties\MobileMenu;
use Tests\TestCase;

class BindingPropertiesTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $str = <<<EOD
123
123

EOD;

        $this->expectOutputString($str);

        $menu = new Menu();
        $mobileMenu = new MobileMenu();
        BindProp::bindProp($menu, $mobileMenu);

        $menu->setProperty('property', 123);
        echo $menu->getProperty('property') . PHP_EOL;
        echo $mobileMenu->getProperty('property') . PHP_EOL;
    }
}
