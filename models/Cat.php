<?php
require_once __DIR__ . '/Category.php';

class Cat extends Category{
  
  public function __construct(string $size, string $age, string $sterilized){

    $this->icon = '<i class="fa-solid fa-cat"></i>';
    $this->size = $size;
    $this->age = $age;
    $this->sterilized = $sterilized;

  }
}