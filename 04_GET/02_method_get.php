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
        
    <title>Cours PHP - Chapitre 5 - 01 Methode POST</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="bg-light">
    <!-- ====================================================== -->
    <!-- en-tête :  HEADER A COMPLETER AVEC NAV EN REQUIRE      --> 
    <!-- ====================================================== -->
    
    <header class="container-fluid p-4 bg-dark">
        <div class="col-12 text-center text-info">
            <h1 class="display-4">Cours PHP - Chapitre 5 - 01 Methode POST</h1>
            <p class="lead">$_POST[ ] permet de récupérer les données saisies dans un formulaire</p>

            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
            <?php
                $varOla = "Olá !";
                echo "<p class=\"text-white\">$varOla tudo bem?</p>";
        
                whatDay();
            ?>
        </div>
    </header>
    <!-- fin container-fluid : header -->

    <div class="container mt-2 mb-2 p-2 m-auto">

        <section class="row">

            <div class="col-md-6">
                <h2>TitreNiveau2</h2>

                <?php 
                    // debug($_GET); // à enlever en production
                    // if isset : est-il établi que nous avons toutes les informations dans $_GET ? 

                    if(isset($_GET['article']) && isset($_GET['couleur']) && isset($_GET['prix'])) { // si oui si c'est vrai 

                        echo "<h2>Voici votre produit : " .$_GET['article']. "</h2>";
                        echo "<div class=\"border border-primary w-50 p-4\">";
                        echo "<p>Produit : " .$_GET['article']. " *** Couleur : " .$_GET['couleur']. "</p>";// on affiche les valeurs
                        echo "<p class=\"bg-success\">Prix : " .$_GET['prix']. " € </p>";
                        echo "</div>";

                    } else {

                        echo "<h2>Fiche produit</h2>";
                        echo "<p class=\"alert alert-danger w-50\">Ce produit n'existe pas, <a href=\"01_method_get.php\">veuillez retournez sur la page des produits</a></p>";// sinon on affiche un message "ce produit n'existe pas"
                    }
                ?>                   
            </div>            
            <!-- fin col -->

            <div class="col-md-6">
                <h2>TitreNiveau2</h2>
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