<?php


namespace GildedRose\Decorator;


use GildedRose\Interfaces\Update;
use GildedRose\Item;

abstract class UpdateDecorator implements Update
{
    protected $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

}