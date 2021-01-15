<?php
// echo 'hello';
// echo '<br>';

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
$firstFilm = new Movie('Amici miei', '9', 'Comico');

$firstMovieTitle = $firstFilm->title;

$firstMovieDirector = $firstFilm->director = 'Mario Monicelli';

$firstMovieYear = $firstFilm->year = 1975;

$firstMovieGenre = $firstFilm->getGenre();

// echo($firstMovieTitle);
// echo '<br>';
// echo($firstMovieDirector);
// echo '<br>';
// echo($firstMovieYear);
// echo '<br>';
// echo($firstMovieGenre);
// echo '<br>';


// CREO UN SECONDO OGGETTO
$secondFilm = new Movie('Interstellar', '8.5', 'Fantascienza');

$secondMovieTitle = $secondFilm->title;

$secondMovieDirector = $secondFilm->director = 'Christopher Nolan';

$secondMovieYear = $secondFilm->year = 2014;

$secondMovieGenre = $secondFilm->getGenre();

// echo($secondMovieTitle);
// echo '<br>';
// echo ($secondMovieDirector);
// echo '<br>';
// echo ($secondMovieYear);
// echo '<br>';
// echo ($secondMovieGenre);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>First Class</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1 class="text-uppercase">firt class</h1>
        </header>
        <main>
            <div class="container">
                <div class="card-container">
                    <div class="card">
                        <h2>First Movie</h2>
                        <p><?php echo $firstMovieTitle?></p>
                        <p><?php echo $firstMovieDirector?></p>
                        <p><?php echo $firstMovieYear?></p>
                        <p><?php echo $firstMovieGenre?></p>
                    </div>
                    <div class="card">
                        <h2>Second Movie</h2>
                        <p><?php echo $secondMovieTitle?></p>
                        <p><?php echo $secondMovieDirector?></p>
                        <p><?php echo $secondMovieYear?></p>
                        <p><?php echo $secondMovieGenre?></p>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
