<?php

class Movie{
  public $title;
  public $original_title;
  public $genre;
  public $plot; 
  public $rating;

  public function __construct(string $_title , string $_original_title , array $_genre , string $_plot)
  {
    $this->title = $_title;
    $this->original_title = $_original_title;
    $this->genre = $_genre ;
    $this->plot = $_plot;
  }

  public function getFullTitle(){
    echo $this-> title,  $this->original_title ;
  }
}

