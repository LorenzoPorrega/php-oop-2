<?php
require_once __DIR__ . '/Category.php';
require_once __DIR__ . './../traits/WithSize.php';

class Dog extends Category{

  use WithSize;
  
  protected $icon;
  protected $age;
  protected $sterilized;

  public function __construct(string $size, int $age, bool $sterilized){

    $this->icon = '<i class="fa-solid fa-dog"></i>';
    $this->size = $size;
    $this->age = $age;
    $this->sterilized = $sterilized;

  }
}