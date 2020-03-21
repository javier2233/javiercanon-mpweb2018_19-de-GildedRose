<?php
/**
 * Created by PhpStorm.
 * User: javie
 * Date: 24/02/2019
 * Time: 6:11 PM
 */
namespace GildedRose\Services;

use GildedRose\Decorator\UpdateDecorator;
use GildedRose\Item;

class Aged extends UpdateDecorator
{
    const LESS_SELL = 1;

    public function __construct(Item $item)
    {
        parent::__construct($item);
    }

    public function updateItem()
    {
        $this->qualityProcess();
        $this->sellInProcess();
    }

    public function qualityProcess(){
        $valueQuality = 1;
        if($this->item->sellIn <= 0){
            $valueQuality = 2;
        }
        $this->item->quality += $valueQuality;
    }

    public function sellInProcess()
    {
        $this->item->sellIn -= self::LESS_SELL;
    }

}