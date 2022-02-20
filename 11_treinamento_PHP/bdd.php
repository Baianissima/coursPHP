<?php 

// 1 APPEL DES FONCTIONS
require_once 'inc/functions.php';  

// 2 CONNEXION BDD universite
$pdoUNIV = new PDO( 'mysql:host=localhost;dbname=universite',// hôte nom BDD universite
              'root',// pseudo 
            //   '',// mot de passe
                  'root',// mdp pour MAC avec MAMP
              array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,// afficher les erreurs SQL dans le navigateur
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',// charset des échanges avec la BDD
              ));
            //   debug($pdoUNIV);
            // debug(get_class_methods($pdoUNIV));


// 3 TRAITEMENT DU FORMULAIRE SÉCURISÉ AVEC UNE REQUÊTE PRÉPARÉE
if ( !empty( $_POST )) {// est-ce que $_POST n'est pas vide
	$_POST['prenom'] = htmlspecialchars($_POST['prenom']);// pour se prémunir des failles et des injections SQL
	$_POST['nom'] = htmlspecialchars($_POST['nom']);

	$insertion = $pdoUNIV->prepare( " INSERT INTO etudiants (prenom, nom, date_enregistrement) VALUES (:prenom, :nom, NOW()) " );// requete préparée avec des marqueurs

	$insertion->execute( array(
		':prenom' => $_POST['prenom'],
		':nom' => $_POST['nom'],
	));
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,600;1,400&family=Belgrano&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;1,200&display=swap" rel="stylesheet"> 

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>

    <!-- Bootstrap ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Mes styles -->
    <link rel="stylesheet" href="css/styles.css" >

    <title>Connexion à la BDD</title>
</head>

<body>

    <!-- ====================================================== -->
    <!--  EN-TETE : header à preceder de NAVBAR en require      --> 
    <!-- ====================================================== --> 
    
    <?php 
        require_once 'inc/navbar.inc.php';
    ?> 

    <header class="container-fluid f-header p-2 mb-4 bg-light">
        <div class="col-12 text-center">
            <h1 class="display-4">Connexion à la BDD Université</h1>
            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
            <?php
                $positiva = "Viens nous rejoindre !";
                echo "<p class=\"text-info\">$positiva</p>";
            ?>
        </div>
    </header>
    <!-- fin container-fluid header -->

    <!-- ====================================================== -->
    <!--                CONTAINER : contenu principal           --> 
    <!-- ====================================================== -->
    <main class="container p-2">
        <section class="row justify-content-center p-4">
            <div class="col-md-12 mx-auto my-4 alert alert-dark">
                <h2 class="m-4 p-4 text-center text-white">Connexion à la BDD "universite" : option 1</h2>
                <p class="lead text-center text-white">Sans variables pour la connexion</p>
                <code> $pdoUNIV = new PDO( 'mysql:host=localhost;dbname=universite',// hôte nom BDD universite <br>
              'root',// pseudo  <br>
                //   '',// mot de passe <br>
                'root',// mdp pour MAC avec MAMP <br>
                array( <br>
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,// afficher les erreurs SQL dans le navigateur <br>
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',// charset des échanges avec la BDD <br>
              )); <br>
                //   debug($pdoUNIV); <br>
                // debug(get_class_methods($pdoUNIV)); </code> <br>
            </div>
            <!-- fin col -->
    
            <div class="col-md-12 mx-auto my-4 alert alert-dark">
                <h2 class="m-4 p-4 text-center text-white">Connexion à la BDD "universite" : option 2</h2>
                <p class="lead text-center text-white">Avec des variables pour la connexion</p>

                    <code>$host = 'localhost';//le chemin vers le serveur de données <br>
                    $database = 'universite';//le nom de la BDD <br>
                    $user = 'root';// le nom d'utilisateur pour se connecter <br>
                    // $psw = '';// mdp pour PC sur XAMPP <br>
                    $psw = 'root';// mdp pour MAC sur MAMPP <br>

                    $pdoUNIV = new PDO('mysql:host='.$host.';dbname='.$database,$user,$psw, <br>
                    array( <br>
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,// pour afficher les warnings SQL dans le navigateur <br>
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',// pour définir le charset des échanges avec la BDD <br>
                    )); <br>

                    // var_dump(get_class_methods($pdoMAB));<code> <br>
            </div>
           

            <div class="col-md-12 mx-auto">
                <h2 class="m-4 p-4 text-center text-white">Afficher les données d'abord avec ma var_dump perso (ma fonction "debug") :</h2>    
                <?php
                 // 3 affichage de données 
                    $resultat = $pdoUNIV->query( " SELECT * FROM etudiants ");
                    // debug($resultat);
                    $nbr_etudiants = $resultat->rowCount();
                    // debug($nbr_etudiants);
                ?>
                <h5 class="mx-auto alert alert-light text-info text-center p-4 w-50">Il y a <?php echo $nbr_etudiants; ?> étudiants à l'université ! </h5>
            </div>
            <!-- fin col -->

            
        </section>
        <!-- fin row -->
    </main>
    <!-- fin container -->

    <!-- ====================================================== -->
    <!--                  FOOTER : en require                   --> 
    <!-- ====================================================== -->  
    
    <?php 
        require_once 'inc/footer.inc.php';
    ?> 

    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>
</html>
