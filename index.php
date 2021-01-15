<?php
echo 'hello';
echo '<br>';

class Movie {

    public $title;
    public $year;
    public $director;
    public $genre;

    function __construct($_title, $_genre) {
        $this->title = $_title;
        $this->genre = $_genre;
    }
};

$firstFilm = new Movie('amici miei', 'comico');

$firstMovie = $firstFilm->title;

$firstMovieDirector = $firstFilm->director = 'Mario Monicelli';

$firstMovieYear = $firstFilm->year = 1975;

echo($firstMovie);
echo '<br>';
echo($firstMovieDirector);
echo '<br>';
echo($firstMovieYear);



?>
