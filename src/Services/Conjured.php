<?php
/**
 * Created by PhpStorm.
 * User: javie
 * Date: 24/02/2019
 * Time: 8:34 PM
 */
namespace GildedRose\Services;

use GildedRose\Interfaces\SellIn;
use GildedRose\Interfaces\Update;
use GildedRose\Item;

class Conjured implements Update,SellIn
{
    const LESS_SELL = 2;
    public function updateItem(Item $item)
    {
        $this->sellInProcess($item);
    }

    public function sellInProcess($item, $minQuality = 0){

        $item->sellIn -= self::LESS_SELL;
    }

}