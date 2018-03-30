package com.gildedrose;


import org.assertj.core.api.Assertions;
import org.junit.Test;

public class GildedRoseTest {

    @Test
    public void foo() {
        // Given
        Item[] items = new Item[] { new Item("foo", 0, 0) };
        GildedRose app = new GildedRose(items);

        // When
        app.updateQuality();

        // Then
        Assertions.assertThat(app.items[0].name).isEqualTo("fixme");
    }

}
