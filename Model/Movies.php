<?php

class Movie{
  public $original_title;
  public $title;
  public $genre;
  public $plot; 

  public function __construct(string $_original_title ,string $_title , string $_genre , string $_plot)
  {
    $this->original_title = $_original_title;
    $this->title = $_title;
    $this->genre = $_genre ;
    $this->plot = $_plot;
  }

  public function getFullTitle(){
    echo $this->original_title , $this-> title;
  }
}

