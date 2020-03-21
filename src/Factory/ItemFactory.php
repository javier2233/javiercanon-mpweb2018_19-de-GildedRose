<?php


namespace GildedRose\Factory;
use GildedRose\Services\Aged;
use GildedRose\Services\Backstage;
use GildedRose\Services\CommonItem;
use GildedRose\Services\Conjured;
use GildedRose\Services\Sulfuras;

class ItemFactory
{
    public function createItem($item){

        $nameItem = $item->name;
        switch ($nameItem){
            case 'Aged Brie':
                return new Aged($item);
            case 'Sulfuras, Hand of Ragnaros':
                return new Sulfuras($item);
            case 'Backstage passes to a TAFKAL80ETC concert':
                return new Backstage($item);
            case 'Conjured Mana Cake':
                return new Conjured($item);
            default:
                return new CommonItem($item);
        }
    }
}