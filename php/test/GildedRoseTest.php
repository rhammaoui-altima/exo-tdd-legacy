<?php

namespace App;


use PHPUnit\Framework\TestCase;

class GildedRoseTest extends TestCase {

    function testFoo() {
        $items = array(new Item("foo", 0, 0));
        $gildedRose = new GildedRose($items);
        $gildedRose->update_quality();
        $this->assertEquals("foo", $items[0]->name);
        $this->assertEquals(-1, $items[0]->sell_in);
        $this->assertEquals(0, $items[0]->quality);
    }
    function testFooWhenSellInEqual1AndQualityEqual5() {
        $items = array(new Item("foo2", 1, 5));
        $gildedRose = new GildedRose($items);
        $gildedRose->update_quality();
        $this->assertEquals("foo2", $items[0]->name);
        $this->assertEquals(0, $items[0]->sell_in);
        $this->assertEquals(4, $items[0]->quality);
    }

    function testFooWhenSellInEqual10AndQualityEqual42() {
        $items = array(new Item("foo2", 10, 42));
        $gildedRose = new GildedRose($items);
        $gildedRose->update_quality();
        $this->assertEquals("foo2", $items[0]->name);
        $this->assertEquals(9, $items[0]->sell_in);
        $this->assertEquals(41, $items[0]->quality);
    }
    function testFooWhenSellInEqual10AndQualityLess0() {
        $items = array(new Item("foo2", 10, -1));
        $gildedRose = new GildedRose($items);
        $gildedRose->update_quality();
        $this->assertEquals("foo2", $items[0]->name);
        $this->assertEquals(9, $items[0]->sell_in);
        $this->assertEquals(-1, $items[0]->quality);
    }

    function testFooWhenNameIsAgedBrie() {
        $items = array(new Item("Aged Brie", 10, -1));
        $gildedRose = new GildedRose($items);
        $gildedRose->update_quality();
        $this->assertEquals("Aged Brie", $items[0]->name);
        $this->assertEquals(9, $items[0]->sell_in);
        $this->assertEquals(0, $items[0]->quality);
    }

    function testFooWhenNameIsAgedBrie2() {
        $items = array(new Item("Aged Brie", 1, 5));
        $gildedRose = new GildedRose($items);
        $gildedRose->update_quality();
        $this->assertEquals("Aged Brie", $items[0]->name);
        $this->assertEquals(0, $items[0]->sell_in);
        $this->assertEquals(6, $items[0]->quality);
    }
    function testFooWhenNameIsBackstagepassestoaTAFKAL80ETCconcert() {
        $items = array(new Item("Backstage passes to a TAFKAL80ETC concert", 1, 5));
        $gildedRose = new GildedRose($items);
        $gildedRose->update_quality();
        $this->assertEquals("Backstage passes to a TAFKAL80ETC concert", $items[0]->name);
        $this->assertEquals(0, $items[0]->sell_in);
        $this->assertEquals(8, $items[0]->quality);
    }

    function testFooWhenSellInLess0AndNameIsFoo() {
        $items = array(new Item("foo", -5, 5));
        $gildedRose = new GildedRose($items);
        $gildedRose->update_quality();
        $this->assertEquals("foo", $items[0]->name);
        $this->assertEquals(-6, $items[0]->sell_in);
        $this->assertEquals(3, $items[0]->quality);
    }
    function testFooWhenSellInLess0AndNameIsAgedBrie() {
        $items = array(new Item("Aged Brie", -5, 5));
        $gildedRose = new GildedRose($items);
        $gildedRose->update_quality();
        $this->assertEquals("Aged Brie", $items[0]->name);
        $this->assertEquals(-6, $items[0]->sell_in);
        $this->assertEquals(7, $items[0]->quality);
    }


}
