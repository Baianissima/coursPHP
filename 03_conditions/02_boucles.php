<?php
 require_once '../inc/functions.php'; // appel des fonctions

 // NAVBAR EN REQUIRE
require_once '../inc/navbar.inc.php';
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
        
    <title>Cours PHP - 02 Boucles</title>

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
    
    <header class="container-fluid p-4">
        <div class="col-12 text-center text-info">
            <h1 class="display-4">Cours PHP - 02 Boucles</h1>
            <p class="lead">Les boucles permettent de répéter des opértions élémentaires sans avoir à écrire le code.</p>

            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
            <?php
                $varOla = "Olá !";
                echo "<p class=\"text-white\">$varOla tudo bem?</p>";
        
                whatDay();
            ?>
        </div>
    </header>
    <!-- fin container-fluid : header -->

    <div class="container justify-content-center mt-2 mb-2 p-2 m-auto">

        <section class="row">

            <div class="col-md-6">
                <h2 class="alert-info text-center">1) La boucle <code>WHILE</code></h2>
                <p>La boucle while permet d'affiner le comportement d'une boucle en réalisant de manière répétitive tant qu'une condition est évaluée à vrai/TRUE et de l'arrêter quand elle est évaluée à faux/FALSE.</p>

                <?php

                $n = 1;
                // debug($n);

                while($n%7 != 0) {  // à condition que le nombre dans $n NE SOIT PAS un multiple de 7

                    $n = rand(1,100);  // Un tirage de nombre aléatoire et ce sont ces nombres que l'on teste

                    // echo $n, " / ";  // VOIR concaténation avec virgule ?

                    echo $n. " * ";
                }
                echo "<hr>";

                // $num = 10;
                while($num <= 40) {
                    echo $num. " * ";
                    $num = $num*5;
                }
                ?>          
            </div>
            <!-- fin col -->

            <div class="col-md-6">
                <h2>2) La boucle <code>DO... WHILE</code></h2>
                <p>La condition n'est évaluée qu'après une première exécution des instructions du bloc compris entre <code>DO</code> et <code>WHILE</p>

                <?php
                    $n2 = 1;// initialisation de la variable à 1
                    // debug($n2);
                    do             
                    { $n2 = rand( 1,100 );
                        debug($n2);
                        echo $n2. " ** ";
                    }
                    while ( $n2%7 !=0 );// la condition, trouver un multiple de 7, n'est testée qu'après le premier tirage
                ?>
            </div>
            <!-- fin col --> 
            
            <div class="col-md-6">
                <h2>3) La boucle <code>FOR</code></h2>
                <p>La boucle FOR est plus concise que la boucle while</p>

                <?php
                    for ( $i = 0; $i <= 10; $i++) {
                        echo si. " ** ";
                        // debug($i);
                    }
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