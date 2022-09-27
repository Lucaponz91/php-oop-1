<?php
include_once __DIR__ . '/app/movie.php';
include_once __DIR__ . '/app/actor.php';

$rocky = new Movie('rocky','action','en', 1976);


var_dump($rocky) ;
$rocky-> printMovie();


// $topGun = new Movie('topGun', 'action');