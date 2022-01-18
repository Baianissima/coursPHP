<?php

    // APPEL DES FONCTIONS
    require_once '../inc/functions.php';

    // NAVBAR EN REQUIRE
    require_once '../inc/navbar.inc.php';

    // Le fichier de session peut contenir des informations sensibles, il n'est pas accessible par l'internaute
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
        <div class="text-center text-info">
            <h1 class="display-4">Cours PHP - Chapitre 8 - 01_SESSION</h1>
            <p class="lead">Les données du fichier de session sont accessibles et manipulables à partir de la superglobale $_SESSION</p>

            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
            <?php
                $varOla = "Olá !";
                echo "<p class=\"text-white\">$varOla tudo bem?</p>";
        
                whatDay();
            ?>
        </div>
    </header>
    <!-- fin container-fluid : header -->

    <div class="container mt-4 mb-4 p-2 mx-auto">

        <section class="row p-2">
    
            <div class="col-md-12 text-center p-4">
                <h2>Principe des sessions</h2>
                    <p>Un fichier temporaire appelé "session" est crée sur le serveur, avec un identifiant unique.</p>
                    <p>Cette session est liée à un internaute car dans le même temps un cookie est déposé sur le poste de l'internaute avec l'identifiant (au nom de PHPSESSID).</p>
                    <p>Ce cookie est détruit lorsque l'on quite le navigateur.</p>
            </div>
        </section>
        <!-- fin row -->

        <?php echo '<hr>'; ?>

        <section class="row p-2">
            <h2 class="col-12 p-4 text-center">Etapes de l'exécution du code PHP sur cette page :</h2>
    
            <div class="col-md-6">
                <h3>1- Utilisation de $_SESSION</h3>
                <p>// Le fichier de session peut contenir des informations sensibles, il n'est pas accessible par l'internaute (session_start() lance la session avant  passage php :<br>
                <code> session_start();</code> <br>
   
                <p>(passage php utilisé avant le DOCTYPE, contenu affiché par la var_dump à coté) <br> 
                    //utilisation de $_SESSION<br>
                    <code>$_SESSION['pseudo'] = 'Tintin';  --------------------------------------><br>
                    $_SESSION['mdp'] = 'Milou2022'; <br>
                    $_SESSION['email'] = 'tintin@moulinsart.be'; <br>
                    </code>
                </p>
            </div>            
            <!-- fin col -->
    
            <div class="col-md-6">
                <h3>2- La session est remplie</h3>

                <?php
                    echo '<p>// Les sessions se trouvent dans le dossier /tmp/ du serveur cad, dans le dossier <code>tmp</code> de Xampp</p>';
                    echo '<p>Ici ma var_dump "debug" fait afficher l array generé par <code>$_SESSION</code> : <code>debug($_SESSION);</code>';
                    
                    debug($_SESSION);
                    // vider une partie de la session avec unset() enlève dans le tableau l'indice mdp et sa valeur
                    // unset($_SESSION['mdp']);
                    // debug($_SESSION);
                    // echo '<hr>';
                    // session_destroy();
                    // sessiondestroy() n'est exécuté qu'à la fin du script. Nous voyons encore ici le contenu de la session, mais el ficheir temporaire dans le dossier tmp a été supprimé
                    // debug($_SESSION);
                ?>
            </div>            
            <!-- fin col -->
        </section>
        <!-- fin row --> 

     

        <section class="row p-2 m-2">
            <div class="col-md-6">
                <h3>3 - Code pour l array généré à côté</h3>
                <p><code>unset($_SESSION['mdp']); -------------------------------------------> <br></code></p>
            </div>

            <div class="col-md-6">
                <h3>4- Vider une partie de la session avec <code>unset()</code> enlève dans le tableau l'indice <code>mdp</code> et sa valeur :</h3>
                <p>Ici ma <code>var_dump</code> "debug" fait afficher l array generé par $_SESSION. Après ce debug($_SESSION) fait "supprimer" l indice <code>mdp</code> on exécutant <code>unset($_SESSION['mdp']);</code></p>

                <?php
                    unset($_SESSION['mdp']);
                    debug($_SESSION);
                    // echo '<hr>';
                    // session_destroy();
                    // sessiondestroy() n'est exécuté qu'à la fin du script. Nous voyons encore ici le contenu de la session, mais el ficheir temporaire dans le dossier tmp a été supprimé
                    // debug($_SESSION);
                ?>
            </div>
        </section>
        <!-- fin row -->

        <section class="row p-2 m-2">
            <div class="col-md-6">
                <h3>5 - Maintenant avec <code>session_destroy()</code></h3>
                
                <p>Code pour l array généré à côté<code>session_destroy(); -----------------------> <br></code></p>
            </div>

            <div class="col-md-6">
                <h3>6- Suppression du fichier temporaire avec <code>session_destroy()</code></h3>
                
                <p> <code>session_destroy()</code></p> n'est exécuté qu'à la fin du script. Nous voyons encore ici le contenu de la session, mais le fichier temporaire dans le dossier <code>tmp</code> a été supprimé.</p>
                <p>Ici ma <code>var_dump</code> "debug" fait afficher l array generé par <code>session_destroy()</code></p>. Après ce debug<code>session_destroy()</code></p> fait "supprimer" le ficher temporaire</p>

                <?php
                    unset($_SESSION['mdp']);
                    debug($_SESSION);
    
                    session_destroy();
                    // session_destroy() n'est exécuté qu'à la fin du script. Nous voyons encore ici le contenu de la session, mais el ficheir temporaire dans le dossier tmp a été supprimé
                    // debug($_SESSION);
                ?>
            </div>
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