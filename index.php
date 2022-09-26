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
    $this->year = $year;
    $this->genre = $genre;
    $this->length = $length;
  }
}

$firstMovie = new Movie('https://mr.comingsoon.it/imgdb/locandine/big/45068.jpg',
                        'The Wolf of Wall Street',
                        'The Wolf of Wall Street è un film di genere drammatico del 2013, diretto da Martin Scorsese, con Leonardo DiCaprio e Jonah Hill. Uscita al cinema il 23 gennaio 2014. Durata 179 minuti. Distribuito da 01 Distribution.',
                        2013,
                        'Drammatico',
                        179);
var_dump($firstMovie);

$secondMovie = new Movie('https://scale.coolshop-cdn.com/product-media.coolshop-cdn.com/AE49RZ/86269df3a5da4519975656c7b9a334a2.jpg/f/inglourious-basterds-quentin-tarantino-dvd.jpg',
                         'Inglourious Basterds',
                         'Bastardi senza gloria è un film di genere guerra, avventura, azione del 2009, diretto da Quentin Tarantino, con Brad Pitt e Diane Kruger. Uscita al cinema il 02 ottobre 2009. Durata 148 minuti. Distribuito da Universal Pictures.',
                         2009,
                         'Guerra, Avventura',
                         148);
var_dump($secondMovie);