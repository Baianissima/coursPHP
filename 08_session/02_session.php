<?php

 // 1 APPEL DES FONCTIONS
 require_once '../inc/functions.php';

 session_start(); // ici la session n'est pas recréée car elle existe déjà grâce au session_start() lancé dans le fichier 01_session.php

// NAVBAR EN REQUIRE
 require_once '../inc/navbar.inc.php';

 // LA VARIABLE ($GLOBALS) récupere toutes les informations de toutes les superglobales :
    // debug($GLOBALS);

    // echo '<h1>Cours PHP - $_SESSION</h1>';
    // echo '<p>Les données du fichier de session sont accessibles et manipulables à partir de la superglobale $_SESSION.</p>';
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
        
    <title>Cours PHP - Chapitre 08 - 02 Session</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="">
    <!-- ====================================================== -->
    <!-- en-tête :  HEADER A COMPLETER AVEC NAV EN REQUIRE      --> 
    <!-- ====================================================== -->

    

    <header class="container-fluid f-header p-2 text-info">
        <div class="text-center">
            <h1 class="display-4 text-center">Cours PHP - Chapitre 08 - 02_SESSION</h1>
            <p class="lead">La session est déjà ouverte, elle est accessible dans tout le script du site</p>

            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
            <?php
                $varOla = "Olá!";
                echo "<p class=\"text-white\">$varOla Tudo bem?</p>";
                whatDay();
            ?>
        </div>
    </header>
    <!-- fin container-fluid header -->

    <div class="container mt-4 mb-4 p-2 mx-auto">

        <section class="row">

            <div class="col-md-5 p-2 m-2">
                <h2>Avantage d'une session</h2>
                <p>La session est disponible partout sur les pages d'un site</p>       
            </div>
            <!-- fin col -->  

            <div class="col-md-5 p-2 m-2">
                <h2>REGELER LE POSITIONNEMENT DU FOOTER !</h2>
                <p> </p>       
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