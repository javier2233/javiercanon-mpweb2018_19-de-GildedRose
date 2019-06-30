<?php
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 30/06/2019
 * Time: 12:29 PM
 */

namespace GildedRose\Services;


use GildedRose\Interfaces\Quality;
use GildedRose\Interfaces\Update;
use GildedRose\Item;

class Sulfuras implements Update,Quality
{
    const QUALITY_SULFURAS = 80;
    public function updateItem(Item $item)
    {
       $this->qualityProcess($item, 50);
    }

    public function qualityProcess($item, $maxQuality)
    {
        $item->quality = self::QUALITY_SULFURAS;
    }

}