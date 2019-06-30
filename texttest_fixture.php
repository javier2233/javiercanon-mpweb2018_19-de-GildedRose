<?php
/**
 * Created by PhpStorm.
 * User: javie
 * Date: 27/01/2019
 * Time: 12:47 PM
 */
include_once "vendor/autoload.php";
use GildedRose\Item as Item;
use GildedRose\GildedRose as GildedRose;

echo "OMGHAI!\n";

$items = array(
    new Item('+5 Dexterity Vest', 10, 20),
    new Item('Aged Brie', 2, 0),
    new Item('Elixir of the Mongoose', 5, 7),
    new Item('Sulfuras, Hand of Ragnaros', 0, 80),
    new Item('Sulfuras, Hand of Ragnaros', -1, 80),
    new Item('Backstage passes to a TAFKAL80ETC concert', 15, 20),
    new Item('Backstage passes to a TAFKAL80ETC concert', 10, 49),
    new Item('Backstage passes to a TAFKAL80ETC concert', 5, 49),
    // this conjured item does not work properly yet
    new Item('Conjured Mana Cake', 3, 6)
);

$app = new GildedRose($items);

$days = 2;
if (count($argv) > 1) {
    $days = (int) $argv[1];
}

for ($i = 0; $i < $days; $i++) {
    echo("-------- day $i -------- \n");
    echo("name, sellIn, quality \n");
    foreach ($items as $item) {
        echo $item . "\n";
    }
    echo PHP_EOL;
    $app->updateQuality();
}