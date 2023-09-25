<?php

class Category {

  protected $age;
  protected $sterilized;
  protected $icon;

  public function __construct(){
    
  }

  

  /**
   * Get the value of icon
   */
  public function getIcon(){
    return $this->icon;
  }

  /**
   * Set the value of icon
   */
  public function setIcon($icon): self{
    $this->icon = $icon;

    return $this;
  }
}