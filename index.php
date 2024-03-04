<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
    <?php

    spl_autoload_register(function ($class){
        require $class . '.php';
    });



    $pays1 = new Pays("France");
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

    $joueur1 = new Joueur("Gameiro", "Kévin", "09-05-1987", $pays1);
    $joueur2 = new Joueur("Kroos", "Toni", "04-01-1990", $pays3);
    $joueur3 = new Joueur("Iniesta", "Andres", "11-05-1984", $pays3);
    $joueur4 = new Joueur("Lampard", "Franck", "20-06-1978", $pays4);
    $joueur5 = new Joueur("Ronaldo", "Cristiano", "05-02-1985", $pays1);

    $carriere1 = new Carriere(2021, $equipe1, $joueur1);
    $carriere2 = new Carriere(2018, $equipe7, $joueur1);
    $carriere3 = new Carriere(2018, $equipe1, $joueur3);


    echo "<div class='pays'>";
    echo "<div class='index'>";
    echo $pays4->getDetailClubPays();
    echo "</div>";
    echo "<div class='index'>";
    echo $pays3->getDetailClubPays();
    echo "</div>";
    echo "<div class='index'>";
    echo $pays1->getDetailClubPays() . "</div></div>";
   


    echo "<div class='club'>";
    echo "<div class='index'>";
    echo $equipe1->getCarriereEquipe();
    echo "</div>";
    echo "</div>";

    // echo $equipe1->getListCarriereClub();
    // echo $equipe7->getListCarriereClub();
    echo "<div class='joueur'>";
    echo "<div class='index'>";
    echo $joueur1->getCarriereJoueur();
    echo "</div>";
    echo "</div>";

    

 
    ?>

  
    </main>
    
</body>
</html>








