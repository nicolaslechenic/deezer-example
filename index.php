<?php

require_once("User.php");
require_once("Song.php");

$toto = new User(1);

$title = new Song("title", 187);
$title2 = new Song("Un autre titre", 212);
$title3 = new Song("Encore un", 180);
$title4 = new Song("Un dernier", 187);

$toto->addToFav($title);
$toto->addToFav($title2);
$toto->addToFav($title4);

foreach($toto->getFavorites() as $favorite) {
  echo $favorite->infos() . "<br/>"; 
}