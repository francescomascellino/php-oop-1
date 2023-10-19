<?php

// NEW MOVIE CLASS ISTANCE 1
$evilDeadR = new Movie('Evil Dead Rise');

// ATTRIBUTES DELCRATION
$evilDeadR->year = 2023;
$evilDeadR->poster = 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/rmYDAsof5V74GwYsGVKRUGS4grH.jpg';
$evilDeadR->addGenre('Horror');
$evilDeadR->addGenre('Trhriller');

// var_dump($evilDeadR);