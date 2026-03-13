<?php
require_once "./Traits/Name.php";

require_once "./Models/Movie.php";

require_once "./Models/Genre.php";

require_once "./db.php";

// var_dump($fast_and_furious);
// var_dump($deadpool);
// var_dump($matrix->isOld());

$deadpool->addGenre($genre_commedy_action);
// var_dump($deadpool->getGenres());
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
    <h1>Film</h1>

</body>

<!-- BootStrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

</html>