<?php

require_once __DIR__ . '/product.php';

class Acquarium extends product{
  public function __construct($_name, $_price, $_categories){
    parent:: __construct($_name, $_price, $_categories);
  }
}

?>