<?php
class Movie
{
    use Name;
    public $year;
    public $durationInMinutes;
    public $director;

    public $genres = [];

    public function __construct($_name, $_year, $_durationInMinutes, $_director, Genre ...$_genres)
    {
        $this->name = $_name;
        $this->year = $_year;
        $this->durationInMinutes = $_durationInMinutes;
        $this->director = $_director;
        $this->genres = $_genres;
    }

    public function isOld()
    {
        return $this->year <= 1999 ? "Il film è vecchio." : "Il film è recente.";
    }
}

?>