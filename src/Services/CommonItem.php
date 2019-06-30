<?php
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 30/06/2019
 * Time: 12:31 PM
 */

namespace GildedRose\Services;


use GildedRose\Interfaces\Quality;
use GildedRose\Interfaces\SellIn;
use GildedRose\Interfaces\Update;
use GildedRose\Item;

class CommonItem implements Update, Quality, SellIn{

    public function updateItem(Item $item)
    {
        $this->qualityProcess($item);
        $this->sellInProcess($item);
    }

    public function qualityProcess($item, $maxQuality = 0){
        $valueQuality = 1;
        $item->quality -= $valueQuality;
    }
    public function sellInProcess($item, $minQuality = 0){
        $lessSell = 1;
        $item->sellIn -= $lessSell;
    }
}