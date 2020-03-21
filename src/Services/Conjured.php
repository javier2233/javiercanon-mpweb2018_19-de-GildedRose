<?php
/**
 * Created by PhpStorm.
 * User: javie
 * Date: 24/02/2019
 * Time: 8:34 PM
 */
namespace GildedRose\Services;

use GildedRose\Decorator\UpdateDecorator;
use GildedRose\Item;

class Conjured extends UpdateDecorator
{
    const LESS_SELL = 2;

    public function __construct(Item $item)
    {
        parent::__construct($item);
    }

    public function updateItem()
    {
        $this->sellInProcess();
    }

    public function sellInProcess(){

        $this->item->sellIn -= self::LESS_SELL;
    }

    public function qualityProcess()
    {
        // TODO: Implement qualityProcess() method.
    }

}