<?php

trait WithSize {
  public static $small = "S";
  public static $medium = "M";
  public static $large = "L";

  protected $size;

  /**
   * Get the value of size
   */
  public function getSize()
  {
    return $this->size;
  }

  /**
   * Set the value of size
   */
  public function setSize($size): self
  {
    $this->size = $size;

    return $this;
  }
}