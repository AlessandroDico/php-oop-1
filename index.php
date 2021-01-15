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


class FirstMovieActors {
    public $name;
    public $lastname;
    public $role;

    function __construct($_lastname) {
        $this->lastname = $_lastname;
    }

    public function getLastname() {
        return $this->lastname;
    }
}

$firstMainActor = new FirstMovieActors('Tognazzi');
$firstMainActorName = $firstMainActor->name = 'Ugo';
$firstMainActorLastname = $firstMainActor->getLastname();
$firstMainActorRole = $firstMainActor->role = 'Raffaello Mascetti';

$secondMainActor = new FirstMovieActors('Moschin');
$secondMainActorName = $secondMainActor->name = 'Gastone';
$secondMainActorLastname = $secondMainActor->getLastname();
$secondMainActorRole = $secondMainActor->role = 'Rambaldo Melandri';

$thirdMainActor = new FirstMovieActors('Noiret');
$thirdMainActorName = $thirdMainActor->name = 'Philippe';
$thirdMainActorLastname = $thirdMainActor->getLastname();
$thirdMainActorRole = $thirdMainActor->role = 'Giorgio Perozzi';


class SecondMovieActors {
    public $name;
    public $lastname;
    public $role;

    function __construct($_lastname) {
        $this->lastname = $_lastname;
    }

    public function getLastname() {
        return $this->lastname;
    }
}

$firstMainActorT = new SecondMovieActors('McConaughey');
$firstMainActorNameT = $firstMainActorT->name = 'Matthew';
$firstMainActorLastnameT = $firstMainActorT->getLastname();
$firstMainActorRoleT = $firstMainActorT->role = 'Joseph Cooper';

$secondMainActorT = new SecondMovieActors('Hathaway');
$secondMainActorNameT = $secondMainActorT->name = 'Anne';
$secondMainActorLastnameT = $secondMainActorT->getLastname();
$secondMainActorRoleT = $secondMainActorT->role = 'Amelia Brand';

$thirdMainActorT = new SecondMovieActors('Jessica');
$thirdMainActorNameT = $thirdMainActorT->name = 'Chastain';
$thirdMainActorLastnameT = $thirdMainActorT->getLastname();
$thirdMainActorRoleT = $thirdMainActorT->role = 'Murphy Cooper';



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
                        <div class="card-left">
                            <h2>First Movie</h2>
                            <p>Title : <?php echo $firstMovieTitle?></p>
                            <p>Director : <?php echo $firstMovieDirector?></p>
                            <p>Year : <?php echo $firstMovieYear?></p>
                            <p>Genre : <?php echo $firstMovieGenre?></p>
                        </div>
                        <div class="card-right">
                            <h2>Actors</h2>
                            <div class="firstActor">
                                <span>Name :
                                    <span class="bold">
                                        <?php echo $firstMainActorName?>
                                        <?php echo $firstMainActorLastname?>
                                    </span>
                                </span>
                                <span> nel ruolo di <?php echo $firstMainActorRole?></span>
                            </div>
                            <div class="secondActor">
                                <span>Name :
                                    <span class="bold">
                                        <?php echo $secondMainActorName?>
                                        <?php echo $secondMainActorLastname?>
                                    </span>
                                </span>
                                <span> nel ruolo di <?php echo $secondMainActorRole?></span>
                            </div>
                            <div class="thirdActor">
                                <span>Name :
                                    <span class="bold">
                                        <?php echo $thirdMainActorName?>
                                        <?php echo $thirdMainActorLastname?>
                                    </span>
                                </span>
                                <span> nel ruolo di <?php echo $thirdMainActorRole?></span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-left">
                            <h2>Second Movie</h2>
                            <p>Title : <?php echo $secondMovieTitle?></p>
                            <p>Director : <?php echo $secondMovieDirector?></p>
                            <p>Year : <?php echo $secondMovieYear?></p>
                            <p>Genre : <?php echo $secondMovieGenre?></p>
                        </div>
                        <div class="card-right">
                            <h2>Actors</h2>
                            <div class="firstActor">
                                <span>Name :
                                    <span class="bold">
                                        <?php echo $firstMainActorNameT?>
                                        <?php echo $firstMainActorLastnameT?>
                                    </span>
                                </span>
                                <span> nel ruolo di <?php echo $firstMainActorRoleT?></span>
                            </div>
                            <div class="secondActor">
                                <span>Name :
                                    <span class="bold">
                                        <?php echo $secondMainActorNameT?>
                                        <?php echo $secondMainActorLastnameT?>
                                    </span>
                                </span>
                                <span> nel ruolo di <?php echo $secondMainActorRoleT?></span>
                            </div>
                            <div class="thirdActor">
                                <span>Name :
                                    <span class="bold">
                                        <?php echo $thirdMainActorNameT?>
                                        <?php echo $thirdMainActorLastnameT?>
                                    </span>
                                </span>
                                <span> nel ruolo di <?php echo $thirdMainActorRoleT?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
