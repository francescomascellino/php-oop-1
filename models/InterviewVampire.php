<?php

// NEW MOVIE CLASS ISTANCE 2
$interviewVampire = new Movie('Interview with the Vampire');

// ATTRIBUTES DECLARATION
$interviewVampire->year = 1994;
$interviewVampire->poster = 'https://www.themoviedb.org/t/p/original/izvCmmBjUJsSyfeObxtZd4hczUk.jpg';
$interviewVampire->addGenre('Drama');
$interviewVampire->addGenre('Horror');

// var_dump($interviewVampire);