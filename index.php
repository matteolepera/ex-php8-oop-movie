<?php

class Movie
{
    public $name;
    public $year;
    public $durationInMinutes;
    public $director;

    public function __construct($_name, $_year, $_durationInMinutes, $_director)
    {
        $this->name = $_name;
        $this->year = $_year;
        $this->durationInMinutes = $_durationInMinutes;
        $this->director = $_director;

    }
}


$fast_and_furious = new Movie("Fast and furious", 2001, 106, "Rob Cohen");
$deadpool = new Movie("Deadpool", 2016, 108, "Tim Miller");

// var_dump($fast_and_furious);
var_dump($deadpool);
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
    <h1>Test</h1>

</body>

<!-- BootStrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

</html>