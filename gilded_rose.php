<?php
/**
 * Created by PhpStorm.
 * User: javie
 * Date: 27/01/2019
 * Time: 12:46 PM
 */
include 'Quality.php';
include 'SellIn.php';
include 'Item.php';
include 'Aged.php';
include 'Backstage.php';
include 'Conjured.php';
class GildedRose {

    private $items;
    private $type;
    const MAX_QUALITY = 50;
    const MIN_QUALITY = 0;

    private $products = array(
        'aged'=> 'Aged Brie',
        'sulfuras' => 'Sulfuras, Hand of Ragnaros',
        'backstage' => 'Backstage passes to a TAFKAL80ETC concert',
        'conjured' => 'Conjured Mana Cake'
    );

    function __construct($items) {
        $this->items = $items;
    }

    function update_quality() {
        foreach ($this->items as $item) {
            $this->type = array_search($item->name, $this->products);
            switch ($this->type){
                case 'aged':
                    $aged = new Aged();
                    $obj_quality = $aged;
                    $obj_sell = $item;
                    //$aged->qualityProcess($item);
                    break;
                case 'backstage':
                    $backstage = new Backstage();
                    //$aged->qualityProcess($item, self::MAX_QUALITY);
                    $obj_quality = $backstage;
                    $obj_sell = $backstage;
                    break;
                case 'conjured':
                    $conjured = new Conjured();
                    $obj_quality = $item;
                    $obj_sell = $conjured;
                    break;
                default:
                    $obj_quality = $item;
                    $obj_sell = $item;

            }
            $this->process_update_quality($obj_quality,$obj_sell, $item);
        }
    }

    private function process_update_quality($obj_quality, $obj_sell, $item){
        if($this->type != "sulfuras"){
            $obj_sell->SellInProcess($item, self::MIN_QUALITY);
            $obj_quality->qualityProcess($item, self::MAX_QUALITY);
        }
    }
}
