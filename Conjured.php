<?php
/**
 * Created by PhpStorm.
 * User: javie
 * Date: 24/02/2019
 * Time: 8:34 PM
 */

class Conjured implements SellIn
{
    public  function SellInProcess($item, $min_quality){
        $less_sell = 2;
        $item->sell_in -=  $less_sell;
    }

}