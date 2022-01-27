<?php 

class House 
{
 protected $doorcolor;
 protected $wallColor;
 protected $windowSillColor;

 public $width;
 public $height;
 public $length;
 public $rooftype;

 public function __construct($width, $height, $lenght)
 {
  $this->width = $width;
  $this->height = $height;
  $this->length = $lenght;
 }
 

 public function paint ($color)
 {
    //  $this->color = $color;
    $this->doorcolor = $color;
    $this->wallColor = $color;
    $this->windowSillColor = $color;
     
 }
}