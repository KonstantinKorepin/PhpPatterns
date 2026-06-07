<?php

namespace App\Patterns\Behavioral\HierarchicalVisitor;

class LeafNode extends Employee
{
    public function accept(IHierarchicalVisitor $v): bool
    {
        return $v->visitLeaf($this);
    }
}
