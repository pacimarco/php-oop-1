<?php
require_once __DIR__.'/movie.php';

$straneDays = new Movie("StrangeDays", "1996", "Action","104min","english");

$nuovoCinemaParadiso = new Movie("NuovoCinemaParadiso", "1988", "Drammatico","122min","italiano");

$straneDays->getPoster();
$nuovoCinemaParadiso->getPoster();