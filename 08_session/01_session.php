<?php

    // APPEL DES FONCTIONS
    require_once '../inc/functions.php';

    // NAVBAR EN REQUIRE
    require_once '../inc/navbar.inc.php';

    // LA VARIABLE ($GLOBALS) récupere toutes les finformations de toutes les superglobales :
    // debug($GLOBALS);

    echo '<h1>Cours PHP - $_SESSION</h1>';
    echo '<p>Les données du fichier de session sont accessibles et manipulables à partir de la superglobale $_SESSION.</p>';

    // session_start() démarre la bdd
    // le fichier de session peut contenir des inforamtions sensibles, il n'est pas accessile par l'internaute
    session_start();

    //utilisation de $_SESSION
    $_SESSION['pseudo'] = 'Tintin';
    $_SESSION['mdp'] = 'Milou2022';
    $_SESSION['email'] = 'tintin@moulinsart.be';


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
        
    <title>Cours PHP - Chapitre 8 - 01 Session</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="">
    <!-- ====================================================== -->
    <!-- en-tête :  HEADER A COMPLETER AVEC NAV EN REQUIRE      --> 
    <!-- ====================================================== -->
    
    <header class="container-fluid p-4">
        <div class="col-12 text-center text-info">
            <h1 class="display-4">Cours PHP - Chapitre 8 - 01 Session</h1>
            <p class="lead"></p>

            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
            <?php
                $varOla = "Olá !";
                echo "<p class=\"text-white\">$varOla tudo bem?</p>";
        
                whatDay();
            ?>
        </div>
    </header>
    <!-- fin container-fluid : header -->

    <div class="container bg-white mt-4 mb-4 p-2 mx-auto">

        <section class="row p-2">

            <div class="col-md-6">
                <h2>Principe des sessions</h2>
                <p>Un fichier temporaire appelé "session" est crée sur le serveur, avec un identifiant unique. <br>
                Cette session est liée à un internaute car dans le même temps un cookie est déposé sur le poste de l'internaute avec l'identifiant (au nom de PHPSESSID). <br>
                Ce cookie est détruit lorsque l'on quite le navigateur.
                </p>
            </div>            
            <!-- fin col -->

            <div class="col-md-6">
                <h2>1- La session est remplie</h2>

                <?php

                    // Les sessions se trouvent dans le dossier /tmp/ du serveur cad, dans le dossier tmp de Xampp
                    debug($SESSION);
                    // vider une partie de la session avec unset() enlève dans le tableau l'indice mdp et sa valeur
                    unset($_SESSION['mdp']);
                    debug($SESSION);
                    echo '<hr>';
                    // session_destroy();
                    // sessiondestroy() n'est exécuté qu'à la fin du script. Nous voyons encore ici le contenu de la session, mais el ficheir temporaire dans le dossier tmp a été supprimé
                    debug($SESSION);
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