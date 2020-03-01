<?php
/**
 * Created by PhpStorm.
 * User: javie
 * Date: 24/02/2019
 * Time: 6:11 PM
 */
namespace GildedRose\Services;

use GildedRose\Interfaces\Quality;
use GildedRose\Interfaces\SellIn;
use GildedRose\Item;
use GildedRose\Interfaces\Update;

class Aged implements Update, Quality, SellIn
{
    const LESS_SELL = 1;
    public function updateItem(Item $item)
    {
        $this->qualityProcess($item);
        $this->sellInProcess($item);
    }

    public function qualityProcess($item, $maxQuality = 0){
        $valueQuality = 1;
        if($item->sellIn <= 0){
            $valueQuality = 2;
        }
        $item->quality += $valueQuality;
    }
    public function sellInProcess($item, $min_quality = 0)
    {
        $item->sellIn -= self::LESS_SELL;
    }


}