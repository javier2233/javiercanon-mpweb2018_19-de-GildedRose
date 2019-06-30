<?php
/**
 * Created by PhpStorm.
 * User: javie
 * Date: 24/02/2019
 * Time: 6:11 PM
 */
namespace GildedRose\Services;

use GildedRose\Item;
use GildedRose\Interfaces\Quality;
use GildedRose\Interfaces\SellIn;
use GildedRose\Interfaces\Update;

class Backstage implements Update,Quality,SellIn
{
    const AFTER_CONCERT = 0;

    public function updateItem(Item $item)
    {
       $this->sellInProcess($item);
       $this->qualityProcess($item);
    }

    public function qualityProcess($item, $maxQuality = 50){
        $valueQuality = 1;
        if($item->sellIn < 11 && $item->sellIn > 5 ){
            //echo "in 2 $item->sellIn \n";
            $valueQuality = 2;
        }elseif ($item->sellIn < 6 && $item->sellIn > 0){
            //echo "in 3 $item->sellIn \n";
            $valueQuality = 3;
        }elseif ($item->sellIn < 0){
            $valueQuality = 0;
        }
        $item->quality += $valueQuality;
        $item->quality = ($item->quality > $maxQuality  ? $maxQuality  : $item->quality );

    }

    public function sellInProcess($item, $minQuality){
        $lessSell = 1;
        $item->sellIn -= $lessSell;
        if($item->sellIn < self::AFTER_CONCERT){
            $item->quality = $minQuality;
        }
    }

}