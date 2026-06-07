<?php

namespace Tests\Patterns\Fundamental;

use App\Patterns\Fundamental\ImmutableWrapper\Immutable;
use App\Patterns\Fundamental\ImmutableWrapper\ImmutableRight;
use App\Patterns\Fundamental\ImmutableWrapper\ImmutableThird;
use App\Patterns\Fundamental\ImmutableWrapper\MutableX;
use App\Patterns\Fundamental\ImmutableWrapper\Mutant;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;

class ImmutableWrapperTest extends TestCase
{
    public function testImmutableObject(): void
    {
        $immutable = new Immutable(new MutableX());
        //$obj1 = md5(serialize($immutable));
        $obj1 = spl_object_hash($immutable);

        $immutable->getX();
        //$obj2 = md5(serialize($immutable));
        $obj2 = spl_object_hash($immutable);

        $this->assertTrue($obj1 === $obj2);
    }

    public function testImmutableObject2(): void
    {
        $immutable = new Immutable(new MutableX());
        $obj1 = md5(serialize($immutable));

        $immutable->getX()->setY(10);
        $obj2 = md5(serialize($immutable));

        $this->assertTrue($obj1 !== $obj2);
    }

    public function testImmutableObject3(): void
    {
        $mutable = new MutableX();
        $mutable->setX(5);
        $obj1 = md5(serialize($mutable));

        $mutable->setY(10);
        $obj2 = md5(serialize($mutable));

        $this->assertTrue($obj1 !== $obj2);

        $mutable = new MutableX();
        $mutable->setX(5);

        $immutable = new ImmutableRight($mutable);
        $obj1 = md5(serialize($immutable));

        $this->expectExceptionMessage('Call to undefined method App\Patterns\Fundamental\ImmutableWrapper\ImmutableRight::setY()');
        $immutable->setY(10);
        $obj2 = md5(serialize($immutable));

        $this->assertTrue($obj1 === $obj2);
    }

    public function testImmutableCollection(): void
    {
        $immutable = new Immutable(new Collection([new MutableX(), new MutableX()]));
        $obj1 = md5(serialize($immutable));

        $immutable->getX();
        $obj2 = md5(serialize($immutable));

        $this->assertTrue($obj1 === $obj2);

        $immutable->getX()->get(0)->setY(5);
        $obj3 = md5(serialize($immutable));

        $this->assertTrue($obj1 != $obj3);
    }

    public function testImmutableInheritance(): void
    {
        $mutant = new Mutant();
        $immutable = new ImmutableThird($mutant);

        $obj1 = md5(serialize($immutable->getX()->getX()));
        $obj2 = md5(serialize($immutable->getX()->getX()));
        $obj3 = md5(serialize($immutable->getX()->getX()));

        $this->assertTrue($obj1 !== $obj2);
        $this->assertTrue($obj1 !== $obj3);
        $this->assertTrue($obj2 !== $obj3);
    }
}
