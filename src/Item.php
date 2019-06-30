<?php
/**
 * Created by PhpStorm.
 * User: javie
 * Date: 24/02/2019
 * Time: 8:51 PM
 */
namespace GildedRose;


class Item {

    public $name;
    public $sellIn;
    public $quality;

    function __construct($name, $sellIn, $quality) {
        $this->name = $name;
        $this->sellIn = $sellIn;
        $this->quality = $quality;
    }

    public function __toString() {
        return "{$this->name}, {$this->sellIn}, {$this->quality}";
    }

    public function getName(){
        return $this->name;
    }

}