<?php

spl_autoload_register(function ($class){
    require $class . '.php';
});



$pays1 = new Pays("France");
$pays2 = new Pays("Allemagne");
$pays3 = new Pays("Espagne");
$pays4 = new Pays("Angleterre");

$equipe1 = new Equipe("RCSA", $pays1);
$equipe2 = new Equipe("Réal Madrid", $pays3);
$equipe3 = new Equipe("Barcelone", $pays3);
$equipe4 = new Equipe("Chelsea", $pays4);
$equipe5 = new Equipe("PSG", $pays1);
$equipe6 = new Equipe("Marseille", $pays1);
$equipe7 = new Equipe("Valence", $pays3);
$equipe8 = new Equipe("Manchester City", $pays4);
$equipe9 = new Equipe("Liverpool", $pays4);

$joueur1 = new Joueur("Gameiro", "Kévin", "09-05-1987", $pays1, $equipe1, 2021);
$joueur2 = new Joueur("Kroos", "Toni", "04-01-1990", $pays2, $equipe2, 2014);
$joueur3 = new Joueur("Iniesta", "Andres", "11-05-1984", $pays3, $equipe3, 2018);
$joueur4 = new Joueur("Lampard", "Franck", "20-06-1978", $pays4, $equipe3, 2014);
$joueur5 = new Joueur("Gameiro", "Kévin", "09-05-1987", $pays1, $equipe7, 2018);





echo 
$pays3->getClubs();


