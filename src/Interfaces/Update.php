<?php
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 30/06/2019
 * Time: 2:43 PM
 */

namespace GildedRose\Interfaces;


use GildedRose\Item;

interface Update
{
    public function updateItem(Item $item);
}