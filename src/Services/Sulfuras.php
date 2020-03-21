<?php
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 30/06/2019
 * Time: 12:29 PM
 */

namespace GildedRose\Services;


use GildedRose\Decorator\UpdateDecorator;
use GildedRose\Item;

class Sulfuras extends UpdateDecorator
{
    const QUALITY_SULFURAS = 80;
    public function __construct(Item $item)
    {
        parent::__construct($item);
    }

    public function updateItem()
    {
       $this->qualityProcess();
    }

    public function qualityProcess()
    {
        $this->item->quality = self::QUALITY_SULFURAS;
    }

    public function sellInProcess()
    {
        // TODO: Implement sellInProcess() method.
    }

}