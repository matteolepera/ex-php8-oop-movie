<?php

class Movie
{
    public $name;
    public $year;
    public $durationInMinutes;
    public $director;

    public $genres = [];

    public function __construct($_name, $_year, $_durationInMinutes, $_director)
    {
        $this->name = $_name;
        $this->year = $_year;
        $this->durationInMinutes = $_durationInMinutes;
        $this->director = $_director;
    }

    public function isOld()
    {
        // if ($this->year <= 1999) {
        //     return "Il film è vecchio.";
        // } else {
        //     return "Il film è recente.";
        // }

        return $this->year <= 1999 ? "Il film è vecchio." : "Il film è recente.";
    }

    public function addGenre(Genre $_genre)
    {
        return $this->genres[] = $_genre;
    }
    public function getGenres()
    {
        return $this->genres;
    }
}

class Genre
{
    public $name;
    public $description;

    public function __construct($_name, $_description)
    {
        $this->name = $_name;
        $this->description = $_description;
    }


}

$genre_action = new Genre("Azione", "Film caratterizzati da scene ad alta tensione, inseguimenti e scontri fisici, pensati per tenere lo spettatore col fiato sospeso.ione");
$genre_commedy_action = new Genre("Commedia d'azione ", "Film che combinano sequenze d'azione con elementi comici, offrendo un mix di adrenalina e umorismo per intrattenere il pubblico.");


$fast_and_furious = new Movie("Fast and furious", 2001, 106, "Rob Cohen", );
$deadpool = new Movie("Deadpool", 2016, 108, "Tim Miller");
$matrix = new Movie("Matrix", 1999, 136, "Lana & Lilly Wachowski");


// var_dump($fast_and_furious);
var_dump($deadpool);
var_dump($matrix->isOld());

$deadpool->addGenre($genre_commedy_action);
var_dump($deadpool->getGenres());
?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Movies</title>
</head>

<body>
    <h1>Film</h1>

</body>

<!-- BootStrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

</html>