<?php
/**
 * Created by PhpStorm.
 * User: javie
 * Date: 24/02/2019
 * Time: 6:10 PM
 */
namespace GildedRose\Interfaces;

interface SellIn {
    public  function sellInProcess($item, $min_quality);
}