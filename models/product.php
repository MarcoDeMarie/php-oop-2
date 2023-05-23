<?php

class product{
  protected $name;
  protected $price;
  protected $categories;

  public function __construct($_name, $_price, $_categories){
    $this->name = $_name;
    $this->price = $_price;
    $this->categories = $_categories;
  }

  public function stampCard(){
    echo "<div class='card'>";
    echo "<h2>{$this->name}</h2>";
    echo "<p>Price: €{$this->price}</p>";
    echo "<h4>Categories: {$this->categories}</h4>";
    echo "</div>";
  }
}

?>