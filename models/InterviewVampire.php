<?php

// NEW MOVIE OBJECT 2
$interviewVampire = new Movie('Interview with the Vampire');

// VARIABLES DECLARATION
$interviewVampire->year = 1994;
$interviewVampire->poster = 'https://www.themoviedb.org/t/p/original/izvCmmBjUJsSyfeObxtZd4hczUk.jpg';
$interviewVampire->addGenre('Drama');
$interviewVampire->addGenre('Horror');

// var_dump($interviewVampire);