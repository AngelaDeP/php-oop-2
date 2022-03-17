<?php

require_once __DIR__ . './Product.php';

class Toys extends Product {

    public function __construct($name, $price/*, $type, $size*/) {
        
        parent::__construct($name, $price/*, $type, $size*/);

    }

}

?>