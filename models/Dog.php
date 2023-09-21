<?php
require_once __DIR__ . '/Category.php';

class Dog extends Category{

  protected $icon;
  protected $size;
  protected $age;
  protected $sterilized;
  
  public function __construct(string $size, int $age, bool $sterilized){

    $this->icon = '<i class="fa-solid fa-dog"></i>';
    $this->size = $size;
    $this->age = $age;
    $this->sterilized = $sterilized;

  }
}