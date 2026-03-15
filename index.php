<?php
require_once "./Traits/Name.php";

require_once "./Models/Movie.php";

require_once "./Models/Genre.php";

require_once "./db.php";

// var_dump($movies[0]);

?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- BootStrap-Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Movies</title>
</head>

<body>
    <div class="container py-5">
        <div class="mb-4">
            <h1 class="fw-bold">Film</h1>
        </div>

        <div class="row g-3"><?php foreach ($movies as $movie) { ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border shadow-sm h-100">
                        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                            <span class="fw-semibold fs-6">
                                <i class="bi bi-film me-2"></i><?php echo $movie->name; ?>
                            </span>
                            <span class="badge bg-secondary"><?php echo $movie->year; ?></span>
                        </div>

                        <div class="card-body">
                            <p class="text-muted small mb-1">
                                <i class="bi bi-camera-reels me-1"></i>
                                <i>Regia di</i> <strong><?php echo $movie->director; ?></strong>
                            </p>
                            <p class="text-muted small mb-1">
                                <i class="bi bi-clock me-1"></i><?php echo $movie->durationInMinutes . " min"; ?>
                            </p>
                            <p class="text-muted small mb-3">
                                <i class="bi bi-hourglass me-1"></i><?php echo $movie->isOld(); ?>
                            </p>
                            <div class="d-flex flex-wrap gap-2">
                                <?php foreach ($movie->genres as $genre) { ?>
                                    <span class="badge rounded-pill text-bg-primary">
                                        <?php echo $genre->name; ?>
                                    </span>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

<!-- BootStrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

</html>