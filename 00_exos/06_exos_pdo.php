<?php
 require_once '../inc/functions.php'; // appel des fonctions toujours avant DOCTYPE
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
        
    <title>Cours PHP - Exos - 06 PDO</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="bg-light">
    <!-- ====================================================== -->
    <!-- en-tête :  HEADER A COMPLETER AVEC NAV EN REQUIRE      --> 
    <!-- ====================================================== -->
    
    <header class="container-fluid p-4">
        <div class="col-12 text-center text-info">
            <h1 class="display-4">Cours PHP - Exos - 06 PDO</h1>
            <p class="lead">Faire des requêtes préparées</p>

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
                <h2>Consignes pour l'exercice PDO de requete preparée :</h2>            
                    <ul>
                        <li>Require des fonctions</li>
                        <li>Se connecter à la BDD entreprise</li>
                        <li>Afficher dans une ul les noms/prenoms des employes du service commercial, trier par salaire du plus petit au plus grand</li>
                        <li>Utiliser une requête préparée avec bindParam</li>
                        <li>Afficher le nombre de commerciaux</li>
                        <li>Chercher ensuite sur le Web comment mettre le salaire au format français. Ex. 3 000,00 euros</li>
                    </ul>echo '<hr>';              
            </div>
            <!-- fin col -->


            <?php
                // ETAPES A SUIVRE :

                // connexion à la BDD depuis le Mac :
                $pdoENT = new PDO('mysql:host=localhost;dbname=entreprise',  
                'root',  // le pseudo ou l'utilisateur de la BDD
                // '',  // ici le mot de passe en local sur PC est vide avec XAMPP
                'root', // cette ligne commentée donne le mdp pour Mac avec MAMP
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,  // Pour afficher les erreurs SQL dans le navigateur
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', // Pour définir le carset (jeux de caracteres) des echanges avec la BDD
                ));
                debug($pdoENT);
                debug(get_class_methods($pdoENT)); // ici nous auro la liste des methodes

                    // SELECT * FROM employes WHERE prenom='Fabrice'
                    // 1 - On demande des informations à la BDD car il y a un ou plusieurs résultats

            
                    $requete = $pdoENT->query (" SELECT * FROM employes WHERE prenom='Fabrice' ");

                    echo '<hr>';
                    debug($requete);

                    // debut de la requête préparée :
            
                    $service = 'commercial';  // On cherche plus d'un résultat
                    $resultat = $pdoENT->prepare( " SELECT nom, prenom, salaire FROM employes WHERE service = :service ORDER BY salaire ASC " );
                    $resultat->bindParam( ':service', $service); // 2 - On lie le marqueur
                    $resultat->execute(); // 3 - On execute la requête
                    $nombre_employes = $resultat->rowCount();

                    // debug($nombre_employes);
                    echo '<h4> Il y a ' .$nombre_employes. ' employés au service ' .$service. ' </h4>';

                    while ( $informations = $resultat->fetch (PDO::FETCH_ASSOC)) {
                                // debug($informations);
                                // echo $informations['nom'];
                                // echo $informations['salaire'];
                        echo '<p>' .$informations['nom']. ' '.$informations['prenom']. ' '.$informations['service'] . ' - Date d\'embauche : ' .$informations['date_embauche']. ' </p>'; // ici on fait un echo des résultats;
                    }
            ?>
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