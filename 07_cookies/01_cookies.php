<?php
 require_once '../inc/functions.php'; // appel des fonctions toujours avant DOCTYPE

 // 2 - On fait un if isset (TOUJOURS AVANT DOCTYPE)
 if (isset($_GET['langue'])) {  // ce debut nous montre FR sur l URL si on clique sur FR : on récupere la valeur de l'indice langue. Si une langue est dans l'url, on mettra cette langue dans le cookie
     // debug($_GET); 
    $langue = $_GET['langue'];   
    // debug($langue);
    } elseif (isset($_COOKIE['langue'])) {  // sinon si on a reçu un cookie appelé "langue", la valeur du site sera celle du cookie
        $langue = $_COOKIE['langue'];
    } else { // sinon si l'internaute n'a pas choisi de langue, il arrive pour la première fois, on lui met 'fr' par défaut
        $langue = 'fr';
    }

    // 3 - Envoie du cookie avec la langue
    $expiration = time() + 365*24*60*60; // On passe en variable la date d'expiration du cookie : OBLIGATOIRE !
    
    // On ajoute une année à la date du jour ou l'on crée le cookie

    // Création du cookie
    setcookie('langue', $langue, $expiration);
    debug($_COOKIE);
    
// NAVBAR EN REQUIRE
require_once '../inc/navbar.inc.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- ====================================================== -->
    <!-- en-tête :  HEADER A COMPLETER AVEC NAV EN REQUIRE      --> 
    <!-- ====================================================== -->
    
    <nav>
        <?php require_once '../inc/navbar.inc.php'; ?>
    </nav>
    <!-- required my tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
    <title>Cours PHP - superglobale $_COOKIE</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="bg-light">
    <!-- ====================================================== -->
    <!-- en-tête :  HEADER A COMPLETER AVEC NAV EN REQUIRE      --> 
    <!-- ====================================================== -->
    
    <header class="container-fluid p-4">
        <div class="col-12 text-center text-info">
            <h1 class="display-4">Cours PHP - La superglobale $_COOKIE</h1>
            <p class="lead">Un cookie est un fichier de 4ko maxi déposé par le serveur web sur le poste de l'internaute et qui continet des informations.</p>
    
            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
            <?php
                $varOla = "Olá !";
                echo "<p class=\"text-white\">$varOla tudo bem?</p>";
        
                whatDay();
            ?>
        </div>
    </header>
    <!-- fin container-fluid : header -->

    <div class="container mt-4 mb-4 p-2 m-auto">

        <section class="row">
            <div class="col-md-6">
                <h1>La superglobale $_COOKIE</h1>
                <p>Un cookie est un fichier de 4ko maxi déposé par le serveur web sur le poste de l'internaute et qui continet des informations.</p>
                <p>Les cookies sont automatiquement envoyés par le navigateur. Le PHP permet de récuperer les informations stockés dans le/les cookie/s</p>
                <p>IMPORTANT : un cookie étant sauvegardé sur le poste de l'internaute, il peut être modifié, volé ou détournée : ON NE MET PAS D'INFORMATIONS SENSIBLES DANS UN COOKIE (mdp, panier, references bancaires, referecences de sécurité etc...)</p>
            
                <hr>
                    <ul>
                        <!-- 1 - On passe dans l'url une information ; la langue choisie par l'utilisateur; la valeur de l'indice choisi est receptionnée dans la superglobale $_GET -->
                        <li><a href="?langue=fr">Français</a></li>
                        <li><a href="?langue=es">Espagnol</a></li>
                        <li><a href="?langue=it">Italien</a></li>
                        <li><a href="?langue=en">Anglais</a></li>                
                    </ul>             
            </div>
            <!-- fin col -->

            <hr>

            <div>
                <h4>Date du jour exprimée en seconde : les secondes écoulées entre 1er janvier 1970 et maintenant</h4>

                <hr>

                <p>Pour voir le cookie dans Safari et Firefox : inspecteur > stockage</p>
                <p>Pour voir le cookie dans Chrome : inspecteur > application </p>

                <?php
                echo '<p>La langue du site : ' .$langue. '</p>';
                echo time(); // date du jour exprimée en seconde : les secondes écoulées entre 1er janvier 1970 et maintenant
                echo '<br>';
                echo $expiration;

                
                // Pour voir le cookie dans Safari et Firefox : inspecteur > stockage
                // Pour voir le cookie dans Chrome : inspecteur > application 
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