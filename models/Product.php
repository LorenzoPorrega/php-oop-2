<?php

class Product{

  protected $name;
  protected $category;
  protected $description;
  protected $price;
  protected $img;

  public function __construct()
  {
    
  }

  

  /**
   * Get the value of name
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   */
  public function setName($name): self
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of category
   */
  public function getCategory()
  {
    return $this->category;
  }

  /**
   * Set the value of category
   */
  public function setCategory($category): self
  {
    $this->category = $category;

    return $this;
  }

  /**
   * Get the value of description
   */
  public function getDescription()
  {
    return $this->description;
  }

  /**
   * Set the value of description
   */
  public function setDescription($description): self
  {
    $this->description = $description;

    return $this;
  }

  /**
   * Get the value of price
   */
  public function getPrice()
  {
    return $this->price;
  }

  /**
   * Set the value of price
   */
  public function setPrice($price): self
  {
    $this->price = $price;

    return $this;
  }

  /**
   * Get the value of img
   */
  public function getImg()
  {
    return $this->img;
  }

  /**
   * Set the value of img
   */
  public function setImg($img): self
  {
    $this->img = $img;

    return $this;
  }
}