<?php 

// pour arriver à cette page Maj il faut arriver avec $_GET : il faut cliquer sur le lien MISE A JOUR de la page "3_maj.php" qui se trouve sur la page "2_affichage/resultat.php" C'st impossible d'acceder à "3_maj.php" directement !!!

// 1 - APPEL DES FONCTIONS
require_once 'inc/functions.php';  

// 2 CONNEXION BDD universite
$pdoUNIV = new PDO( 'mysql:host=localhost;dbname=universite',// hôte prenom BDD universite
            'root',// pseudo 
            //   '',// mot de passe pour PC avec XAMP
            'root',// mdp pour MAC avec MAMP
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,// afficher les erreurs SQL dans le navigateur
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',// charset des échanges avec la BDD
                ));
                // debug($pdoUNIV);
                // debug(get_class_methods($pdoUNIV));



// 3 - RECEPTION DES INFORMATIONS D'UN ETUDIANT AVEC $_GET

// debug($_GET);

// Ouverture du isset :
if ( isset($_GET['id_etudiant']) ) { // on demande le détail d'un etudiant

    // debug($_GET);

    $resultat = $pdoUNIV->prepare( " SELECT * FROM etudiants WHERE id_etudiant = :id_etudiant ");
    $resultat->execute(array(
        ':id_etudiant' => $_GET['id_etudiant'] // On associe le marqueur vide à l'id_etudiant
    ));

    // debug($resultat->rowCount());

        if ($resultat->rowCount() == 0) { // Si le rowCount est égal à 0 c'est qu'il n'y as pas d'etudiant
        header('location:2_affichage_resultat.php'); // redirection vers la page de départ
            exit(); // arret du script
        }

        $fiche = $resultat->fetch( PDO::FETCH_ASSOC); // Je passe les infos dans une variable
    debug($fiche);
        // fermeture if isset

        } else {
        header('location:2_affichage_resultat.php'); // Si j'arrive sur la page avec rien dans l'url
        exit(); // arret du script
    }


// 4 - MISE A JOUR D'UNE FICHE ETUDIANT : TRAITEMENT DU FORMULAIRE (sur page 3_MAJ) SÉCURISÉ AVEC UNE REQUÊTE PRÉPARÉE :

if ( !empty( $_POST )) {// si $_POST n'est pas vide...
	$_POST['cursus'] = htmlspecialchars($_POST['cursus']);// pour se prémunir des failles et des injections SQL
	$_POST['civilite'] = htmlspecialchars($_POST['civilite']);
    $_POST['cursus'] = htmlspecialchars($_POST['cursus']);
    $_POST['prenom'] = htmlspecialchars($_POST['prenom']);
	$_POST['pseudo'] = htmlspecialchars($_POST['pseudo']);
	$_POST['mdp'] = htmlspecialchars($_POST['mdp']);
    // $_POST['message'] = htmlspecialchars($_POST['message']);

	$resultat = $pdoUNIV->prepare( " INSERT INTO etudiants (cursus, civilite, cursus, prenom, pseudo, mdp) VALUES (:cursus, :civilite, :cursus, :prenom, :pseudo, :mdp) " );// resultat/requete préparée avec des marqueurs

	$resultat->execute( array(
		':cursus' => $_POST['cursus'],
		':civilite' => $_POST['civilite'],
		':cursus' => $_POST['cursus'],
		':prenom' => $_POST['prenom'],
		':pseudo' => $_POST['pseudo'],
		':mdp' => $_POST['mdp'],
        // ':message' => $_POST['message'],
	));

    header ('location:2_affichage_insertion.php');
    exit();
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

    <title>Mise à jour d'un étudiant</title>
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
            <h1 class="display-4">Mise à jour d'une fiche étudiant</h1>
            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
            <?php
                $positiva = "Boa sorte !";
                echo "<p class=\"text-info\">$positiva</p>";
            ?>
        </div>
    </header>
    <!-- fin container-fluid header -->
    
    <!-- ====================================================== -->
    <!--                CONTAINER : contenu principal           --> 
    <!-- ====================================================== -->
    <main class="container p-2 text-light">
        <section class="row justify-content-center p-4 m-4">
            <div class="col-md-12">
                <?php
                    // Pour affichage de données ($resultat peut être emplacée par $resultat):
                    $resultat = $pdoUNIV->query( " SELECT * FROM etudiants ");
                    // debug($resultat);

                    // Pour compter les données :
                    $nbr_etudiants = $resultat->rowCount();
                    // debug($nbr_etudiants);
                ?>
            </div>
            <!-- fin col -->
        </section>
        <!-- fin row -->

        <section class="row">
            <h2 class="text-center m-4 alert alert-dark">Formulaire de mise à jour</h2>  

            <div class="col-md-10 alert alert-light mx-auto p-2">      
                <form action="" method="POST">    
                    <div class="row">
                        <div class="col-5 p-4 mb-2 m-2">
                            <label for="civilite" class="form-label">Civilité :</label>      
                            <input type="radio" name="civilite" value="Mme" id="civilite" checked> Madame
                            <input type="radio" name="civilite" value="M" <?php if (isset($fiche['civilite']) && $fiche['civilite'] == 'M') echo ' checked'; // le 1er bouton sera checked et le second le sera SI on f depuis $fiche?> id="civilite"> Monsieur                   
                        </div>
                        <!-- fin div civilite avec les 2 inputs sur 1 seule row  -->

                        <div class="col-6 p-4 mb-2 m-2">
                            <label for="cursus" class="form-label">Cursus</label>
                            <select name="cursus" id="cursus">
                                <!-- strcmp() string comparaison : strcmp est égal à 1 // !strcmp() est différent de 0 -->
                                <!-- https://www.php.net/manual/fr/function.strcmp.php -->
                                <!-- le douvle > apres ? est normal, ça donne l espace pour les mots des cursus dans e select : ?>> -->

                                <option value="lettres"<?php if (!strcmp("Lettres", $fiche['cursus'])){ echo " selected"; }?>>Lettres</option>

                                <option value="arts plastiques"<?php if (!strcmp("Arts plastiques", $fiche['cursus'])){ echo " selected"; }?>>Arts plastiques</option>
                            </select>             
                        </div>
                        <!-- fin div select pour cursus -->
                    </div>
                    <!-- fin row -->
                  
                    <div class="row p-4 mb-4">
                        <div class="col-6">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" name="nom" id="nom" class="form-control" value="<?php echo $fiche['nom'];?>">
                        </div> 

                        <div class="col-6">
                            <label for="prenom" class="form-label">Prenom</label>
                            <input type="text" name="prenom" id="prenom" class="form-control" value="<?php echo $fiche['prenom'];?>">
                        </div>
                    </div>
                    <!-- fin row nom/prenom -->

                    <div class="row p-4 mb-4">
                        <div class="col-6">
                            <label for="pseudo" class="form-label">Pseudo</label>
                            <input type="text" name="pseudo" id="pseudo" class="form-control" value="<?php echo $fiche['pseudo'];?>">
                        </div> 

                        <div class="col-6">
                            <label for="mdp" class="form-label">Mot de passe</label>
                            <input type="number" name="mdp" id="mdp" class="form-control" value="<?php echo $fiche['mdp'];?>">
                        </div>
                    </div>
                    <!-- fi row nom/prenom -->
            
                    <div class="form-row p-4 mb-4">
                        <small class="col-lg-8  col-md-6 align-baseline ml-1 mr-1 p-1">Les champs suivis d'un * sont obligatoires !</small>
                    </div>
                    <!-- fi row --> 

                    <div class="row p-2 m-2">
                        <button type="submit" class="btn btn-info p-2">Cliquer ici pour la MISE A JOUR !</button>
                    </div>                           
                </form>
                <!-- fin form -->
            </div>
            <!-- fin div englobant le form -->
        </section>
        <!-- fin row -->
    
        <!-- gabarit pour une section -->
        <section class="row mb-4">
                <div class="col-md-6">
                    <h2></h2>         
                </div>
                <!-- fin col --> 

                <div class="col-md-6">
                    <h2></h2>         
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

