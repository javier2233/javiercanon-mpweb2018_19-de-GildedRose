<?php
/**
 * Created by PhpStorm.
 * User: javie
 * Date: 24/02/2019
 * Time: 6:11 PM
 */

class Aged implements Quality
{
    public function qualityProcess($item, $max_quality = 0){
        $valor_quality = 1;
        if($item->sell_in < 0){
            $valor_quality = 2;
        }
        $item->quality += $valor_quality;
    }


}