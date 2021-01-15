<?php
echo 'hello';
echo '<br>';

class Movie {

    public $title;
    public $year;
    public $director;
    public $vote;
    public $genre;

    function __construct($_title, $_vote, $_genre) {
        $this->title = $_title;
        $this->vote = $_vote;
        $this->genre = $_genre;
    }

    public function getGenre() {
        return $this->genre;
    }
};

$firstFilm = new Movie('amici miei', '9', 'comico');

$firstMovie = $firstFilm->title;

$firstMovieDirector = $firstFilm->director = 'Mario Monicelli';

$firstMovieYear = $firstFilm->year = 1975;

$firstGenre = $firstFilm->getGenre();

echo($firstMovie);
echo '<br>';
echo($firstMovieDirector);
echo '<br>';
echo($firstMovieYear);
echo '<br>';
echo($firstGenre);



?>
