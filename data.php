<?php

include __DIR__.'/movie.php';


$firstMovie = new Movie('https://mr.comingsoon.it/imgdb/locandine/big/45068.jpg',
                        'The Wolf of Wall Street',
                        'The Wolf of Wall Street è un film di genere drammatico del 2013, diretto da Martin Scorsese, con Leonardo DiCaprio e Jonah Hill. Uscita al cinema il 23 gennaio 2014. Durata 179 minuti. Distribuito da 01 Distribution.',
                        2013,
                        'Drammatico',
                        179);
//var_dump($firstMovie);

$secondMovie = new Movie('https://scale.coolshop-cdn.com/product-media.coolshop-cdn.com/AE49RZ/86269df3a5da4519975656c7b9a334a2.jpg/f/inglourious-basterds-quentin-tarantino-dvd.jpg',
                         'Inglourious Basterds',
                         'Bastardi senza gloria è un film di genere guerra, avventura, azione del 2009, diretto da Quentin Tarantino, con Brad Pitt e Diane Kruger. Uscita al cinema il 02 ottobre 2009. Durata 148 minuti. Distribuito da Universal Pictures.',
                         2009,
                         'Guerra, Avventura',
                         148);
//var_dump($secondMovie);

$thirdMovie = new Movie('https://pad.mymovies.it/filmclub/2019/07/031/locandina.jpg',
                         'The Gentlemen',
                         'The Gentlemen è un film di genere azione, commedia del 2020, diretto da Guy Ritchie, con Matthew McConaughey e Hugh Grant. Durata 113 minuti. Distribuito da 01 Distribution, Amazon Prime Video.',
                         2020,
                         'Azione, Commedia',
                         113);
//var_dump($secondMovie);
?>