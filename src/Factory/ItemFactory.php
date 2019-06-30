<?php
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 26/06/2019
 * Time: 9:51 PM
 */

namespace GildedRose\Factory;
use GildedRose\Services\Aged;
use GildedRose\Services\Backstage;
use GildedRose\Services\CommonItem;
use GildedRose\Services\Conjured;
use GildedRose\Services\Sulfuras;

class ItemFactory
{
    public function createItem($nameItem){

        switch ($nameItem){
            case 'Aged Brie':
                return new Aged();
            case 'Sulfuras, Hand of Ragnaros':
                return new Sulfuras();
            case 'Backstage passes to a TAFKAL80ETC concert':
                return new Backstage();
            case 'Conjured Mana Cake':
                return new Conjured();
            default:
                return new CommonItem();
        }
    }
}