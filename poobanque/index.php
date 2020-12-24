<?php

require "class/comptebancaire.php" ;
require "class/titulaire.php" ;

$titulaire1= new titulaire ("Lopes","Kevin","1996-09-05","Strasbourg" );
$titulaire2= new titulaire ("Vasselet","Léna","1996-01-29","Reims");

$compte1 = new comptebancaire ("Livret A", 5000, "€", $titulaire1 );
$compte2 = new comptebancaire ("Compte Courant", 2140, "€", $titulaire1);
$compte3 = new comptebancaire ("Livret b", 7000, "€", $titulaire2);
$compte4 = new comptebancaire ("Compte Epargne", 3440, "€", $titulaire2);




echo $titulaire1. "<br/>";
$compte1-> crediter(200); 
$compte2-> debiter(300);
echo $compte1;
echo $titulaire2. "<br/>";
$compte3-> crediter(200); 
echo $compte4;
$compte4-> debiter(300);
echo $compte3. "<br/>";


$compte3->virement(200, $compte2);
$compte1->virement(1000,$compte3);

$titulaire1->afficheGestion();
$titulaire2->afficheGestion();














?>