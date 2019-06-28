<?php

namespace App;


use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{

    public function testToString()
    {
        $item = new Item('foo', 5, 10);

        $toString = $item->__toString();

        $this->assertEquals('foo, 5, 10', $toString);
    }
}
