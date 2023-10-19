<!-- 
Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’ => all’interno della classe sono dichiarate delle variabili d’istanza => all’interno della classe è definito un costruttore => all’interno della classe è definito almeno un metodo ✔

vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà ✔

Bonus 1: Modificare la classe Movie in modo che accetti piú di un genere. ✔

Bonus 2: Creare un layout completo per stampare a schermo una lista di movies. ✔

Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php ✔
mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/ organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati. ✔
-->

<?php

// DEFINE A NEW CLASS
include __DIR__ . '/classes/movie.php';

// CREATES NEW OBJECTS
include __DIR__ . '/models/EvilDeadRise.php';
include __DIR__ . '/models/InterviewVampire.php';

// INCLUDES MOVIES ARRAY
include __DIR__ . '/db.php';

// PUSHES MOVIES INTO $movieList
array_push($movieList, $evilDeadR, $interviewVampire);
// var_dump($movieList)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>
</head>

<body class="bg-dark">

    <div class="container">
        <div class="row flex-row my-3">

            <h1 class="text-center text-light mb-3">OOP MOVIES EXERCISE</h1>

            <!-- Bonus 2: LAYOUT TO PRINT MOVIE CARDS ON SCREEN -->
            <?php foreach ($movieList as $movie) : ?>

                <div class="col-6">

                    <div class="card shadow">
                        <img src="<?= $movie->poster ?>" class="card-img-top" alt="<?= $movie->title ?>">

                        <div class="card-body">
                            <h5 class="card-title mb-3"><?= $movie->title ?></h5>
                            <p class="mb-1"><strong>Anno: </strong><?= $movie->year ?></p>
                            <p class="mb-1"><strong>Genere: </strong><?= $movie->genresList ?></p>
                        </div>

                    </div>

                </div>

            <?php endforeach ?>

        </div>
    </div>

</body>

</html>