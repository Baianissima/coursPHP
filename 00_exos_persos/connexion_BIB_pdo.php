<?php
 require_once '../inc/functions.php'; // appel des fonctions
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- ====================================================== -->
    <!--              AJOUTER LE HEAD EN REQUIRE              --> 
    <!-- ====================================================== -->

    <!-- required my tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
    <title>Test PHP : access BDD avec l'objet PDO</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="">
    <!-- ====================================================== -->
    <!-- en-tête :  HEADER A COMPLETER AVEC NAV EN REQUIRE      --> 
    <!-- ====================================================== -->

    <!-- fin containeur-fluid -->
    <header class="container-fluid f-header p-2">
        <div class="col-12 text-center">
            <h1 class="display-4">Test PHP : access BDD avec l'objet PDO</h1>
            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
            <?php
                $varOla = "Olá !";
                echo "<p class=\"text-white\">$varOla tudo bem?</p>";
        
                whatDay();
            ?>
        </div>
    </header>
    <!-- fin container-fluid header -->

    <div class="container mt-4 mb-4 p-2 m-auto">

        <section class="row mt-4">

            <div class="col-md-8">

                <h2>Connexion à la BDD bibliotheque</h2>

                <?php

                $pdoBIB = new PDO( 'mysql:host=localhost;dbname=bibliotheque',// hôte et nom de la BDD
                'root',// le pseudo 
                // '',// le mot de passe
                'root',// le mdp pour MAC avec MAMP
                array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,// pour afficher les erreurs SQL dans le navigateur
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',// pour définir le charset des échanges avec la BDD
                ));
                // debug(get_class_methods($pdoBIB));

                // SELECT * FROM livre ORDER BY titre
                $requete = $pdoBIB->query(" SELECT * FROM livre ORDER BY id_livre ");
                $nbr_livres = $requete->rowCount();
                debug($nbr_livres);
                echo "<p>Il y a $nbr_livres livres dans la bibliothèque :</p>";
                
                while ( $ligne = $requete->fetch(PDO::FETCH_ASSOC)) {
                echo "<ul>";
                echo "<li>Id : " .$ligne['id_livre']. " -  Auteur : " .$ligne['auteur']." - Titre : " .$ligne['titre']. "</li>";
                echo "</ul>";
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