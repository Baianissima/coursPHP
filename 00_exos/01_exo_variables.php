<?php

//appel de mon fichier de la page fonctions
require_once '../inc/functions.php';

// 6 variables pour tester plus bas dans la page

$chaine = "Longtemps je me suis couché... dans le temps.";
$decimal = 18.74;
$entier = 1515;

$lib = "Liberté";
$egal = "Égalité";
$frat = "Fraternité";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
    <title>Cours PHP - Exo 01 Variables</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="bg-light">
    <!-- =================================== -->
    <!-- en-tête -->
    <!-- =================================== -->
    
    <header class="container-fluid p-4 bg-dark">
        <div class="col-12 text-center text-info">
            <h1 class="display-4">Cours PHP - Exo 01 Variables</h1>
            <p class="lead"></p>
        </div>
    </header>
    <!-- fin containeur-fluid -->

    <div class="container m-4 mx-auto bg-light">
        <section class="row bg-primary text-white">
            <div class="col-sm-12">
                <?php
                echo $entier;

                //echo gettype nous donne le type de données contenues dans une variable
                echo gettype($decimal);

                echo "<hr>";
                print_r("<p>Afficher du contenu avec la fonction <code>print_r()</code></p>");   
                print_r($chaine);

                // j'appelle la fonction Minute, papillon !
                minutePap();

                // une autre fonction pour afficher le jour en langue anglaise en toutes lettres
                whatDay();

                // test perso, j'appelle ma fonction galabru
                galabru();

                echo "<hr>";

                // EXO : écrire la phrase suivante "La devise de la République française est 'Liberté, égalité, fraterité' en utilisant les variables déclarées au debut du fichier."

                echo "<p>La devise de la République française est $lib, $egal, $frat</p>";

                jourSemaine();

                dateFR();

                dateJour();

                date_fr();

                

                ?>
            </div>
            <!-- fin div col -->
        </section>
         <!-- fin section row -->

        <a href="https://www.php.net/manual/fr/datetime.format.php"</a>

    </div>
    <!-- fin div container -->

   
    <!-- Optional JavaScript -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>
</html>