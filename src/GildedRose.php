<?php

namespace GildedRose;

use GildedRose\Factory\ItemFactory;

class GildedRose {

    private $items;
    const MAX_QUALITY = 50;
    const MIN_QUALITY = 0;

    private $products = array(
        'aged'=> 'Aged Brie',
        'sulfuras' => 'Sulfuras, Hand of Ragnaros',
        'backstage' => 'Backstage passes to a TAFKAL80ETC concert',
        'conjured' => 'Conjured Mana Cake'
    );

    function __construct($items) {
        $this->items = $items;
    }

    function updateQuality() {
        foreach ($this->items as $item) {
            $itemType = ItemFactory::createItem($item);
            $itemType->updateItem($item);
        }
    }
}
