<?php


namespace GildedRose\Services;


use GildedRose\Decorator\UpdateDecorator;
use GildedRose\Item;

class CommonItem extends UpdateDecorator {
    const VALUE_QUALITY = 1;
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

        $this->item->quality -= self::VALUE_QUALITY;
    }

    public function sellInProcess(){

        $this->item->sellIn -= self::LESS_SELL;
    }
}