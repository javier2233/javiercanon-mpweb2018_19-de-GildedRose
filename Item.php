<?php
/**
 * Created by PhpStorm.
 * User: javie
 * Date: 24/02/2019
 * Time: 8:51 PM
 */

class Item implements Quality,SellIn {

    public $name;
    public $sell_in;
    public $quality;

    function __construct($name, $sell_in, $quality) {
        $this->name = $name;
        $this->sell_in = $sell_in;
        $this->quality = $quality;
    }

    public function __toString() {
        return "{$this->name}, {$this->sell_in}, {$this->quality}";
    }

    public  function qualityProcess($item, $max_quality = 0){
        $valor_quality = 1;
        $item->quality -= $valor_quality;
    }
    public  function SellInProcess($item, $min_quality){
        $less_sell = 1;
        $item->sell_in -=  $less_sell;
    }

}