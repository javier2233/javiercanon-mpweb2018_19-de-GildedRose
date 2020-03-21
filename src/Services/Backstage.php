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

class Backstage extends UpdateDecorator
{
    const AFTER_CONCERT = 0;
    const LESS_SELL = 1;
    const MAX_QUALITY = 50;
    const MIN_QUALITY = 0;

    public function __construct(Item $item)
    {
        parent::__construct($item);
    }

    public function updateItem()
    {
        $this->sellInProcess();
        $this->qualityProcess();
    }

    public function qualityProcess(){
        $valueQuality = 1;
        if($this->item->sellIn < 11 && $this->item->sellIn > 5 ){
            //echo "in 2 $item->sellIn \n";
            $valueQuality = 2;
        }elseif ($this->item->sellIn < 6 && $this->item->sellIn > 0){
            //echo "in 3 $item->sellIn \n";
            $valueQuality = 3;
        }elseif ($this->item->sellIn < 0){
            $valueQuality = 0;
        }
        $this->item->quality += $valueQuality;
        $this->item->quality = ($this->item->quality > self::MAX_QUALITY ? self::MAX_QUALITY : $this->item->quality );

    }

    public function sellInProcess(){
        $this->item->sellIn -= self::LESS_SELL;
        if($this->item->sellIn < self::AFTER_CONCERT){
            $this->item->quality = self::MIN_QUALITY;
        }
    }

}