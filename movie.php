<?php

class Movie {
  public $poster;
  public $title;
  public $description;
  public $year;
  public $genre;
  public $length;

  function __construct($poster, $title, $description, $year, $genre, $length) {
    $this->poster = $poster;
    $this->title = $title;
    $this->description = $description;
    $this->setYear($year);
    $this->genre = $genre;
    $this->length = $length;
  }

  public function setYear($year) {
    if($year >= 1900 && $year <= 2022 && is_int($year)) {
      $this->year = $year;
    }else {
      $this->year = 'undefined';
    } 
  }
}