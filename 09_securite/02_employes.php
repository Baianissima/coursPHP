<?php
 
 // 1 - APPEL DES FONCTIONS
 require_once '../inc/functions.php';

 // 2 - CONNEXION à la BDD entreprise
 $pdoENT = new PDO('mysql:host=localhost;dbname=entreprise', // hôte et nom BDD
                        'root', // pseudo
                        '',  // mdp pour PC avec XAMP
                        // 'root', // mdp pour MAC avec MAMP/
                        array(
                            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', 
                        ));
                        // debug($pdoENT);
                        // debug(get_class_methods($pdoENT));

 // Ici une demo seulement : TRAITEMENT DU FORMULAIRE (version basique, et c'est la version non sécurisée) :

//  if ( !empty( $_POST )) {
//     //  debug($_POST);
//     $insertion = $pdoDIA->query( " INSERT INTO commentaires (pseudo, message, date_enregistrement) VALUES ( '$_POST[pseudo]', '$_POST[message]', NOW()  ) ");
//  }


// 3 - TRAITEMENT DU FORMULAIRE : ENVOI DES INFORMATIONS A SCTOKER AVEC $_POST

 if (!empty($_POST)) {  // Ici on lit : "Si $_POST n'est pas vide..."
    // debug($_POST)

    $_POST['prenom'] = htmlspecialchars($_POST['prenom']); // pour se prémunir des failles et des injections SQL
    $_POST['nom'] = htmlspecialchars($_POST['nom']);
    $_POST['sexe'] = htmlspecialchars($_POST['sexe']);
    $_POST['service'] = htmlspecialchars($_POST['service']);
    $_POST['date_embauche'] = htmlspecialchars($_POST['date_embauche']);
    $_POST['salaire'] = htmlspecialchars($_POST['salaire']);

    $insertion = $pdoENT->prepare( " INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES (:prenom, :nom, :sexe, :service, :date_embauche, :salaire) "); // requête préparée avec des marqueurs

    // Ici on exécute le tableau (array) sur la même page, pour vérifier, avec les données qui figurent sur la bdd
    $insertion->execute( array(
		':prenom' => $_POST['prenom'],
		':nom' => $_POST['nom'],
		':sexe' => $_POST['sexe'],
		':service' => $_POST['service'],
		':date_embauche' => $_POST['date_embauche'],
		':salaire' => $_POST['salaire'],
    ));
}


// // 4 INITIALISATION DE LA VARIABLE $contenu
//  debug($_GET);

$contenu = '';

//5 - SUPPRESSION D'UN EMPLOYE
// debug($_GET);

if(isset($_GET['action']) && $_GET['action'] == 'supprimer' && isset($_GET['id_employes'])){ 

    $resultat = $pdoENT->prepare(" DELETE FROM employes WHERE id_employes = :id_employes ");

    $resultat->execute(array(
        ':id_employes' => $_GET['id_employes']
    ));
    if($resultat->rowCount() == 0) {
        $contenu .= '<div class="alert alert-danger">erreur de suppression</div>';
    }else{
        $contenu .= '<div class="alert alert-success">Employé bien supprimé</div>'; 
    }

    debug($contenu);
}


 // NAVBAR en require
require_once '../inc/navbar.inc.php';
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

    <!-- Google Fonts -->

    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
    <title>Cours PHP - Chapitre 09 : sécurité (02 employés)</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="">
    <!-- ====================================================== -->
    <!-- en-tête :  HEADER A COMPLETER AVEC NAV EN REQUIRE      --> 
    <!-- ====================================================== -->
    
    
    <header class="container-fluid f-header p-2 text-info">
        <div class="col-12 text-center">
            <h1 class="display-4">Cours PHP - Chapitre 09_sécurité</h1>
            <p class="lead">Page 02_employes</p>
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
        <section class="row text-center">
            <div class="col-md-12">

                <!-- pour limiter le nombre a afficher à 5 employés seulement : ajouter LIMIT 5 apres DESC -->

                <!-- AFFICHAGE DE DONNEES -->
                <?php
                    $resultat = $pdoENT->query( " SELECT * FROM employes ORDER BY id_employes DESC ");
                    // debug($resultat);
                    $nbr_employes = $resultat->rowCount();
                    // debug($nbr_commentaires);
                ?>
            </div>
            <!-- fin col -->        
            </div>
        </section>
        <!-- fin row -->


        <section class="row mx-auto">
            <div class="col-md-6 bg-light m-5">
                <h2>1 - Afficher des données de la table employés sur un tableau</h2>
<<<<<<< Updated upstream

                <h3>Il y a <?php echo $nbr_employes; ?> employés :</h3>
                
=======
                    <h3>Il y a <?php echo $nbr_employes; ?> employés :</h3> 
                    <?php echo $contenu; ?>

>>>>>>> Stashed changes
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Sexe</th>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Service</th>
                            <th>Salaire</th>
                            <th>Date d'embauche</th>
<<<<<<< Updated upstream
                            <th>Fiche employé</th>
                            <th>Message</th>
=======
                            <th>Détail</th>
                            <th>Suppression</th>
>>>>>>> Stashed changes
                        </tr>
                    </thead>
                    <tbody>
                    <!-- Ouverture de la boucle while avec l'accolade ouvrante ici :-->
                        <?php while ( $ligne = $resultat->fetch(PDO::FETCH_ASSOC)){?>
                        <tr>
                            <td><?php echo $ligne['id_employes']; ?></td>
                            <td><?php echo $ligne['sexe']; ?></td>
                            <td><?php echo $ligne['prenom']; ?></td>
                            <td><?php echo $ligne['nom']; ?></td>
                            <td><?php echo $ligne['service']; ?></td>
                            <td><?php echo $ligne['salaire']; ?></td>
                            <td><?php echo $ligne['date_embauche']; ?></td>
                            <td><a href="03_fiche_employe.php?id_employes=<?php echo $ligne['id_employes']; ?>">Mise à jour</a></td>
<<<<<<< Updated upstream
                            <td><?php echo $ligne['message']; ?></td>
=======
                            <td><a href="?action=supprimer&id_employes=<?php echo $ligne['id_employes']; ?>" onclick="return(confirm(' Voulez-vous supprimer cet employé ? '))">Suppression</a></td>
>>>>>>> Stashed changes
                        </tr>
                        <!-- Fermeture de la boucle while avec l'accolade fermante ici : -->
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- fin col -->

            <div class="col-md-4 bg-light m-5">
                <h2> 2 - Formulaire pour insertion d'un nouvel employé</h2>
                <!-- form avec action et method < action est vide car nous envoyons les données avec cette même page et POST va envoyer dans la superglobale $_POST -->

                <form action="" method="POST" class="border border-succes p-1">
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" name="prenom" id="prenom" class="form-control" required></input>
                    </div>

                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom de famille</label>
                        <input type="text" name="nom" id="nom" class="form-control" required></input>
                    </div>

                    <div class="mb-3">
                    <!-- voir doc bootstrap pour le bouton radio des forms : https://getbootstrap.com/docs/5.1/forms/checks-radios/ -->
                        <label for="sexe" class="form-label">Sexe :</label> <br>
                        <input type="radio" name="sexe" value="f" id="sexe" checked> Femme</input> <br>
                        <input type="radio" name="sexe" value="m" id="sexe" checked> Homme</input> <br>
                        <input type="radio" name="sexe" value="x" id="sexe" checked> Autre</input> <br>         
                    </div>

                    <div class="mb-3">
                        <label for="service" class="form-label">Service</label>
                        <select name="service" id="service">
                            <option value="">-----</option>
                            <option value="commercial">Commercial</option>
                            <option value="communication">Communication</option>
                            <option value="comptabilite">Comptabilité</option>
                            <option value="comptabilite">Direction</option>
                            <option value="informatique">Informatique</option>
                            <option value="juridique">Juridique</option>
                            <option value="production">Production</option>
                            <option value="secretariat">Secrétariat</option>
                        </select>
                        <!-- <input type="text" name="pseudo" id="pseudo" class="form-control" required></input> -->
                    </div>

                    <div class="mb-3">
                        <label for="date_embauche" class="form-label">Date d'embauche</label>
                        <input type="date" name="date_embauche" id="date_embauche" class="form-control" required></input>
                    </div>

                    <div class="mb-3">
                        <label for="salaire" class="form-label">Salaire</label>
                        <input type="salaire" name="salaire" id="salaire" class="form-control" required></input>
                    </div>
                    
                    <!-- Voir ce qu'il manque dans la div du message pour que le message soit envoyé !   :-(   -->
                    <!-- <div class="mb-3">
                        <label for="message" class="form-label">Votre message</label>
                        <textarea name="message" id="message" cols="30" rows="5" class="form-control" required></textarea>
                    </div> -->

                    <button type="submit" class="btn btn-success">Ajouter un employé</button>
                </form>
            </div>
            <!-- fin col -->
        </section>
        <!-- fin row -->

       <!-- gabarit pour une section -->
       <section class="row mb-4">
            <div class="col-md-6">
                <h2></h2>         
            </div>
            <!-- fin col --> 

            <div class="col-md-6">
                <?php
                    // debug($GLOBALS);
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