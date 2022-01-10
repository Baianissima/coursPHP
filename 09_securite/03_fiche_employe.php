<?php
 // pour arriver à cette page 3 il faut arriver avec $_GET : cliquer sur le lien "fiche" de la page 2
 
 // 1 APPEL DES FONCTIONS
 require_once '../inc/functions.php'; // appel des fonctions

 // 2 - CONNEXION BDD
 $pdoENT = new PDO('mysql:host=localhost;dbname=entreprise', // hôte et nom BDD
                        'root',
                        // '',  // mdp pour MAC avec XAMP
                        'root', // mdp pour MAC avec MAMP
                        array(
                            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', 
                        ));
                        // debug($pdoENT);
                        // debug(get_class_methods($pdoENT));
                

// 3 RECEPTION DES INFORMATIONS AVEC $_GET
// debug($_GET);

if ( isset($_GET['id_employes']) ) { // on demande le détail d'un employé

    debug($_GET);
    $resultat = $pdoENT->prepare( " SELECT * FROM employes WHERE id_employes = :id_employes ");
    $resultat->execute(array(
        ':id_employes' => $_GET['id_employes'] // On associe le marqueur vide à l'id_employes
    ));
    debug($resultat->rowCount());
        if ($resultat->rowCount() == 0) { // Si le rowCount est égal à 0 c'est qu'il n'y as pas d'employé
        header('location:02_employes.php'); // redirection vers la page de départ
            exit(); // arret du script
        }

        $fiche = $resultat->fetch( PDO::FETCH_ASSOC); // Je passe les infos dans une variable
        debug($fiche); // ferme if isset

        } else {
        header('location:02_employes.php'); // Si j'arrive sur la page avec rien dans l'url
        exit(); // arret du script
    }


// 4 - TRAITEMENT DE MISE A JOUR D'UN EMPLOYE
if (!empty($_POST)) {  // not empty
    // debug($_POST);

    $_POST['prenom'] = htmlspecialchars($_POST['prenom']); // pour se prémunir des failles et des injections SQL
    $_POST['nom'] = htmlspecialchars($_POST['nom']);
    $_POST['sexe'] = htmlspecialchars($_POST['sexe']);
    $_POST['service'] = htmlspecialchars($_POST['service']);
    $_POST['date_embauche'] = htmlspecialchars($_POST['date_embauche']);
    $_POST['salaire'] = htmlspecialchars($_POST['salaire']);

    $resultat = $pdoENT->prepare( " UPDATE employes SET prenom = :prenom, nom = :nom, sexe = :sexe, service = :service, date_embauche = :date_embauche, salaire = :salaire WHERE id_employes = :id_employes " ); // requête préparée avec des marqueurs

    $resultat->execute( array(
        ':prenom' => $_POST['prenom'],
        ':nom' => $_POST['nom'],
        ':sexe' => $_POST['sexe'],
        ':service' => $_POST['service'],
        ':date_embauche' => $_POST['date_embauche'],
        ':salaire' => $_POST['salaire'],
        ':id_employes' => $_GET['id_employes'],
    ));

    header ('location:02_employes.php');
    exit();
 }

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
        
    <title>Cours PHP - Chapitre 09 : sécurité (03 fiche_employe)</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="">
    <!-- ====================================================== -->
    <!-- en-tête :  HEADER A COMPLETER AVEC NAV EN REQUIRE      --> 
    <!-- ====================================================== -->

    <header class="container-fluid f-header p-2 text-info">
        <div class="col-12 text-center">
            <h1 class="display-4">Cours PHP - Chapitre 09_securite</h1>
            <h4>Page 03_fiche_employe</h4>
            <p class="lead"><?php echo $fiche['nom']; ?></p>
            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
            <?php
                $varOla = "Olá!";
                echo "<p class=\"text-white\">$varOla Tudo bem?</p>";
                whatDay();
            ?>
        </div>
    </header>
    <!-- fin container-fluid header -->

    <div class="container mt-4 mb-4 p-2 m-auto">
        <section class="row">
            <div class="col-md-12">
                <h2></h2>

                <!-- pour limiter le nombre a afficher à 5 employés seulement : ajouter LIMIT 5 apres DESC -->
                
                <!-- Faire une card bootstrapavec toutes les infos d'un employé -->
            <?php echo $fiche['nom']; ?>
            </div>
            <!-- fin col -->        
        </section>
        <!-- fin row -->

        <section class="row mb-4">
            <h2>Mise à jour de l'employé</h2>
            <form action="" method="POST">

                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" name="prenom" id="prenom" class="form-control" value="<?php echo $fiche['prenom'];?>">
                </div>

                <div class="mb-3">
                    <label for="prenom" class="form-label">Nom</label>
                    <input type="text" name="nom" id="nom" class="form-control" value="<?php echo $fiche['nom'];?>">
                </div>

                <!-- voir code bootstrap pour bouton radio - check-radios -->
                <div class="mb-3">
                    <label for="sexe" class="form-label">Sexe</label> <br>
                    <input type="radio" name="sexe" value="f" id="sexe" checked>Femme<br>
                    <input type="radio" name="sexe" value="m" <?php if (isset($fiche['sexe']) && $fiche['sexe'] == 'm') echo ' checked'; // le 1er bouton sera checked et le second le sera SI on f depuis $fiche?> id="sexe">Homme                      
                </div>

                <div class="mb-3">
                    <label for="service" class="form-label">Service</label>
                    <select name="service" id="service">
                            <!-- strcmp() string comparaison : strcmp est égal à 1 // !strcmp() est différent de 0 -->
                            <!-- https://www.php.net/manual/fr/function.strcmp.php -->
                            
                            <option value="commercial"<?php if (!strcmp("commercial", $fiche['service'])){ echo " selected"; }?>>Commercial</option>
                            <option value="communication"<?php if (!strcmp("communication", $fiche['service'])){ echo " selected"; }?>>Communication</option>
                            <option value="comptabilite"<?php if (!strcmp("comptabilite", $fiche['service'])){ echo " selected"; }?>>Comptabilité</option>
                            <option value="comptabilite"<?php if (!strcmp("comptabilite", $fiche['service'])){ echo " selected"; }?>>Direction</option>
                            <option value="informatique"<?php if (!strcmp("informatique", $fiche['service'])){ echo " selected"; }?>>Informatique</option>
                            <option value="juridique"<?php if (!strcmp("juridique", $fiche['service'])){ echo " selected"; }?>>Juridique</option>
                            <option value="production"<?php if (!strcmp("production", $fiche['service'])){ echo " selected"; }?>>Production</option>
                            <option value="secretariat"<?php if (!strcmp("secretariat", $fiche['service'])){ echo " selected"; }?>>Secrétariat</option>
                        </select>
                    </div>

                <div class="mb-3">
                    <label for="date_embauche" class="form-label">Date d'embauche</label>
                    <input type="date" name="date_embauche" id="date_embauche" class="form-control" value="<?php echo $fiche['date_embauche'];?>">
                </div>

                <div class="mb-3">
                    <label for="salaire" class="form-label">Salaire</label>
                    <input type="text" name="salaire" id="salaire" class="form-control" value="<?php echo $fiche['salaire'];?>">
                </div>

                <button type="submit" class="btn btn-primary">Mise à jour</button>       
            </form>

        
                                        
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