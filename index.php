<!-- 
Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’ => all’interno della classe sono dichiarate delle variabili d’istanza => all’interno della classe è definito un costruttore => all’interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

Bonus 1: Modificare la classe Movie in modo che accetti piú di un genere.

Bonus 2: Creare un layout completo per stampare a schermo una lista di movies.

Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
-->

<?php

// DEFINE A NEW CLASS
class Movie
{
    public $title = null;
    public $year;
    public $genre = [];

    /**
     * Constructor
     */
    public function __construct($movieTitle)
    {
        $this->title = $movieTitle;
    }

    // Define a method
    public function showTitle()
    {
        return $this->title;
    }

    // Metodo per inserire più di un genere all'interno dell'oggetto
    public function addGenre($newGenre)
    {
        array_push($this->genre, $newGenre);
    }
}

// Nuovo oggetto  Movie 1
$evilDeadR = new Movie('Evil Dead Rising');

// Dichiarazione variabili
$evilDeadR->year = 2023;
$evilDeadR->addGenre('Horror');
$evilDeadR->addGenre('Trhriller');

var_dump($evilDeadR);

// Nuovo oggetto  Movie 1
$interviewVampire = new Movie('Interview with the Vampire');

// Dichiarazione variabili
$interviewVampire->year = 1994;
$interviewVampire->addGenre('Drama');
$interviewVampire->addGenre('Horror');

var_dump($interviewVampire);
