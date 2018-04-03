from gilded_rose import Item, GildedRose


class TestGildedRose(object):
    def test_foo(self):
        # Given
        items = [Item("foo", 0, 0)]
        gilded_rose = GildedRose(items)

        # When
        gilded_rose.update_quality()

        # Then
        assert items[0].name == "fixme"
