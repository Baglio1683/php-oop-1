<?php
require_once __DIR__ . "/Movie/movie.php";


$year_movie1 = 1990;
$language_movie1 = "English";
$name_movie1 = "Jurassik Park";
$Country_movie1 = "Canada";
$Time_movie1 = 90;
$Budget_movie1 = 30;

$year_movie2 = 2010;
$language_movie2 = "English";
$name_movie2 = "Jurassik World";
$Country_movie2 = "USA";
$Time_movie2 = 120;
$Budget_movie2 = 40;




$Jurassik_Park = new movie($name_movie1, $year_movie1, $Time_movie1, $language_movie1, $Country_movie1, $Budget_movie1);


$Jurassik_World = new movie($name_movie2, $year_movie2, $Time_movie2, $language_movie2, $Country_movie2, $Budget_movie2);


$Jurassik_Park->print();

$Jurassik_World->print(); 