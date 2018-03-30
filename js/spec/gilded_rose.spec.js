'use strict';

const expect = require('chai').expect;
const {Item, Shop} = require('../src/gilded_rose');

describe("Gilded Rose", function() {

  it("should foo", function() {
    // Given
    const gildedRose = new Shop([ new Item("foo", 0, 0) ]);

    // When
    const items = gildedRose.updateQuality();

    // Then
    expect(items[0].name).to.equal("fixme");
  });

});
