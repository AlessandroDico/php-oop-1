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

// CREO UN PRIMO OGGETTO
$firstFilm = new Movie('amici miei', '9', 'comico');

$firstMovieTitle = $firstFilm->title;

$firstMovieDirector = $firstFilm->director = 'Mario Monicelli';

$firstMovieYear = $firstFilm->year = 1975;

$firstMovieGenre = $firstFilm->getGenre();

echo($firstMovieTitle);
echo '<br>';
echo($firstMovieDirector);
echo '<br>';
echo($firstMovieYear);
echo '<br>';
echo($firstMovieGenre);
echo '<br>';


// CREO UN SECONDO OGGETTO
$secondFilm = new Movie('interstellar', '8.5', 'fantascienza');

$secondMovieTitle = $secondFilm->title;

$secondMovieDirector = $secondFilm->director = 'Christopher Nolan';

$secondMovieYear = $secondFilm->year = 2014;

$secondMovieGenre = $secondFilm->getGenre();

echo($secondMovieTitle);
echo '<br>';
echo ($secondMovieDirector);
echo '<br>';
echo ($secondMovieYear);
echo '<br>';
echo ($secondMovieGenre);

?>
