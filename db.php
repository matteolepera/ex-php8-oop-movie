<?php
$genre_action = new Genre("Azione", "Film caratterizzati da scene ad alta tensione, inseguimenti e scontri fisici, pensati per tenere lo spettatore col fiato sospeso.ione");
$genre_commedy_action = new Genre("Commedia d'azione ", "Film che combinano sequenze d'azione con elementi comici, offrendo un mix di adrenalina e umorismo per intrattenere il pubblico.");

$movies = [
    new Movie("Fast and furious", 2001, 106, "Rob Cohen", $genre_action, $genre_commedy_action),
    new Movie("Deadpool", 2016, 108, "Tim Miller", $genre_commedy_action),
    new Movie("Matrix", 1999, 136, "Lana & Lilly Wachowski", $genre_action)
]


    ?>