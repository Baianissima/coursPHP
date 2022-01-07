<?php
 require_once '../inc/functions.php'; // appel des fonctions
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- ====================================================== -->
    <!--              AJOUTER LE HEAD EN REQUIRE                --> 
    <!-- ====================================================== -->

    <!-- required my tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
    <title>Cours PHP - EXOS - 03 Boucles</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="bg-light">
    <!-- ====================================================== -->
    <!-- en-tête :  HEADER A COMPLETER AVEC NAV EN REQUIRE      --> 
    <!-- ====================================================== -->
    
    <nav>
        <?php require_once '../inc/navbar.inc.php'; ?>
    </nav>
    
    <header class="container-fluid f-header p-2">
        <div class="col-12 text-center text-info">
            <h1 class="display-4 text-center">PHP</h1>
            <p class="lead">Exos / 03 Boucles</p>

            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
            <?php
                $varOla = "Olá !";
                echo "<p class=\"text-white\">$varOla tudo bem?</p>";
        
                // whatDay();
            ?>
        </div>
    </header>
    <!-- fin container-fluid : header -->

    <div class="container justify-content-center bg-light mt-2 mb-2 p-2 m-auto">

        <section class="row">

            <div class="col-md-6 p-2 mt-2 m-auto bg-white">
                <h2><code>While...</code></h2>

                <?php

                $n = 0; // valeur de départ de la  boucle

                while($i < 25) {  // tant que $i est inférieur à 25
                    echo $i. " -- ";  // affiche
                    $i++;  // puis incrémente
                }

                echo "<hr>";

                // les années s'affichent sur le site : de 1920 a 2021
                $annee = 1920;
                // l'anti-slash est obligatoire pour que les valeurs - entre guillemets - s'affichent = \ 
                echo "<label for=\"annee\">Année de naissance en ordre croissant </label><select name=\"annee\" id=\"annee\">"; // tant que...
                while( $annee <= 2021 ) {
                    echo "<option value=\"$annee\">" .$annee. "</option>"; // affiche...
                    $annee++; // incrémentation avec ++  // puis incrémente
                }
            
                echo "</select>";

                echo "<hr>";

                // EXO : la même boucle, mais à l'envers
                //maintenant, on fait afficher en ordre décroissant : de 2021 à 1920
                $annee2 = 2021;
                echo "<label for=\"annee\">Année de naissance en ordre décroissant </label><select name=\"annee\" id=\"annee\">";
                while( $annee2 >= 1920 ) {
                    echo "<option value=\"$annee2\">" .$annee2. "</option>";
                    $annee2--; // décrementation avec --
                }
                echo "</select>";

                ?>          
            </div>
            <!-- fin col -->

            <div class="col-md-6 p-2 mt-2 m-auto bg-white">
                <h2><code>Do... while</code></h2>
                <?php
                    $j = 0;
                    do {
                    echo "<p class=\"lead\">Je fais un tour de boucle, avec WHILE. La condition renvoi à false tout de suite.</p>";
                   
                    $j++;
                    debug($j);
                    } while ($j > 10); // la boucle va faire l'echo une fois et après la condition étant FALSE la boucle s'arrête
                ?>
            </div>
            <!-- fin col -->

            <div class="col-md-6 p-2 mt-2 m-auto">
                <h2><code>For</code></h2>
                <?php
                    // Faire une select avec les 12 mois de l'annéee (en chiffre) dans option avec une boucle for
                    // il faut ouvrir 2 echo : <select> et </select>

                    echo "<label for=\"mois\">Mois de l'année</label><select name=\"mois\">";
                        for ( $mois = 1; $mois <= 12; $mois++ ) {
                            echo "<option value=\"$mois\">$mois</option>";
                        }
                    echo "</select>";
                ?>
            </div>
            <!-- fin col -->

            <div class="col-md-6 p-2 mt-2 m-auto">
                <h2><code>Foreach</code></h2>
                <?php
                    // Faire les mois de l annee avec la boucle FOREACH en tableau associatif pour avoir [1] pour le premier et non [0]
                    //EXO :  Le même dans un tableau associatif appelé $tailles2
                    echo "<hr> <pre class=\"bg-white\">EXO : Le même dans un tableau associatif</pre>";

                    //le tableau associatif
                    $month = [
                        '01'=> 'January',
                        '02' => 'February',
                        '03' => 'March',
                        '04' => 'April',
                        '05' => 'May',
                        '06' => 'June',
                        '07'=> 'July',
                        '08' => 'August',
                        '09' => 'September',
                        '10' => 'October',
                        '11' => 'November',
                        '12' => 'December',
                    ];
                    // debug($month);

                    //la boucle foreach pour $month
                    // la class form-control n'affiche pas l'option CHOISISSEZ VOTRE MOIS...
                    echo "<label for=\"month\">Mois de l'année</label>
                         <select class=\"form-select\" name=\"month\">";

                    echo "<option>Choisissez votre mois de naissance</option>";
                    
                    foreach( $month as $indice => $themonth ) {
                        echo "<option value=\"$indice\">$themonth</option>";
                    }
                    echo "</select>";              
                ?>
            </div>
            <!-- fin col -->
            
        </section>
        <!-- fin row -->
    </div>
    <!-- fin div container -->

    <!-- ====================================================== -->
    <!--                  FOOTER EN REQUIRE                     --> 
    <!-- ====================================================== -->
    
    <footer>
    <!-- Ici on a l'includ pour synroniser le code du footer sur toutes les pages du dossier : -->
    <?php require_once '../inc/footer.inc.php'; ?>
    </footer>
    
    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>
</html>