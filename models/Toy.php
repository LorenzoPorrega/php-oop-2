<?php
require_once __DIR__ . '/Product.php';

class Toy extends Product{
  
  public function __construct(string $name, string $category, string $description, string $price, string $img)
  {
    $this->img = $img;
		$this->name = $name;
		$this->category = $category;
		$this->description = $description;
		$this->price = $price;
  }
}