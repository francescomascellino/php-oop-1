<?php

// DEFINE A NEW CLASS
class Movie
{
    public $title = null;
    public $year;
    public $poster;
    public $genres = [];
    public $genresList;

    // CONTRUSCTOR
    public function __construct($movieTitle)
    {
        $this->title = $movieTitle;
    }

    // Define a method
    public function showTitle()
    {
        return $this->title;
    }

    // METHOD TO ADD NEW GENRES
    public function addGenre($newGenre)
    {
        // ADD THE NEW GENRE TO THE GENRES ARRAY $genres
        array_push($this->genres, $newGenre);
        // UPDATES THE $genreList STRING WITH THE NEW GENRE
        $this->genresList = implode(", ", $this->genres);
    }
}
