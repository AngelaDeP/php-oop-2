<?php

require_once __DIR__ . './Product.php';

class Product {

    public $name;
    public $price;/*
    public $type;
    public $size;*/

    public function __construct($name, $price/*, $type, $size*/) {
        
        $this->name = $name;
        $this->price = $price;/*
        $this->type = $type;
        $this->size = $size;*/

    }

}

?>