<?php

require_once __DIR__ . '/product.php';

class Cages extends product{
  public function __construct($_name, $_price, $_categories){
    parent:: __construct($_name, $_price, $_categories);
  }
}

?>