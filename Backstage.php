<?php
/**
 * Created by PhpStorm.
 * User: javie
 * Date: 24/02/2019
 * Time: 6:11 PM
 */

class Backstage implements Quality,SellIn
{
    const AFTER_CONCERT = 0;
    public  function qualityProcess($item, $max_quality){
        $valor_quality = 1;
        if($item->sell_in < 11 && $item->sell_in > 5 ){
            //echo "entro 2 $item->sell_in \n";
            $valor_quality = 2;
        }elseif ($item->sell_in < 6 && $item->sell_in > 0){
            //echo "entro 3 $item->sell_in \n";
            $valor_quality = 3;
        }elseif ($item->sell_in < 0){
            $valor_quality = 0;
        }
        $item->quality += $valor_quality;
        $item->quality = ($item->quality > $max_quality  ? $max_quality  : $item->quality );

    }

    public  function SellInProcess($item, $min_quality){
        $less_sell = 1;
        $item->sell_in -=  $less_sell;
        if($item->sell_in < self::AFTER_CONCERT){
            $item->quality = $min_quality;
        }
    }

}