<?php 

// 1 - APPEL DES FONCTIONS
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


// 3 - TRAITEMENT DU FORMULAIRE : ENVOI DES INFORMATIONS A SCTOKER AVEC $_POST, avec une resultat préparée

if ( !empty($_POST)) {// "Si $_POST n'est pas vide...
	$_POST['cursus'] = htmlspecialchars($_POST['cursus']);// pour se prémunir des failles et des injections SQL
	$_POST['civilite'] = htmlspecialchars($_POST['civilite']);
    $_POST['prenom'] = htmlspecialchars($_POST['prenom']);
    $_POST['nom'] = htmlspecialchars($_POST['nom']);
	$_POST['pseudo'] = htmlspecialchars($_POST['pseudo']);
	$_POST['mdp'] = htmlspecialchars($_POST['mdp']);
    $_POST['message'] = htmlspecialchars($_POST['message']);

	$insertion = $pdoUNIV->prepare( " INSERT INTO etudiants (cursus, civilite, prenom, nom, pseudo, mdp, message) VALUES (:cursus, :civilite, :prenom, :nom, :pseudo, :mdp, :message) " );// resultat préparée avec des marqueurs

    debug($insertion);

    // Ici on exécute le tableau (array) sur la même page, pour vérifier, avec les données qui figurent sur la bdd :

	$insertion->execute( array(
		':cursus' => $_POST['cursus'],
		':civilite' => $_POST['civilite'],
		':prenom' => $_POST['prenom'],
		':nom' => $_POST['nom'],
		':pseudo' => $_POST['pseudo'],
		':mdp' => $_POST['mdp'],
        ':message' => $_POST['message'],
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

    <title>Affichage et ajout de données</title>
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
            <h1 class="display-4">Affichage + ajout d'un étudiant + lien vers Maj back office</h1>
            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
            <?php
                $positiva = "Vas-y !";
                echo "<p class=\"text-info\">$positiva</p>";
            ?>
        </div>
    </header>
    <!-- fin container-fluid header -->
    
    <!-- ====================================================== -->
    <!--                CONTAINER : contenu principal           --> 
    <!-- ====================================================== -->
    <main class="container p-2">
        <section class="row justify-content-center p-4 m-4">
            <div class="col-md-12 ">
                <?php
                    // Pour affichage de données ($resultat peut être emplacée par $resultat) ajouter LIMIT 8, par exemple, apres DESC :

                    $resultat = $pdoUNIV->query( " SELECT * FROM etudiants ORDER BY id_etudiant DESC ");
                    // debug($resultat);

                    // Pour compter les données :
                    $nbr_etudiants = $resultat->rowCount();
                    // debug($nbr_etudiants);
                ?>
            </div>
            <!-- fin col -->
        </section>
        <!-- fin row -->

        <section class="row justify-content-center p-4 m-4">
            <div class="col-md-12 mx-auto my-4 alert alert-dark text-light">
                <h2>Afficher des donnees de la table etudiants sur ce tableau avec une while dans le tbody : il y a <?php echo $nbr_etudiants; ?> étudiants </h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Cursus</th>
                            <th>Civilite</th>
                            <th>Prenom</th>
                            <th>Nom</th>
                            <th>Pseudo</th>
                            <th>Mdp</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Ouverture de la boucle while avec l'accolade ouvrante ici :-->
                        <?php while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)){?>
                            <tr>
                                <td><?php echo $ligne['id_etudiant']; ?></td>
                                <td><?php echo $ligne['cursus']; ?></td>
                                <td><?php echo $ligne['civilite']; ?></td>
                                <td><?php echo $ligne['prenom']; ?></td>
                                <td><?php echo $ligne['nom']; ?></td>
                                <td><?php echo $ligne['pseudo']; ?></td>
                                <td><?php echo $ligne['mdp']; ?></td>
                                <td><?php echo $ligne['message']; ?></td>

                                 <!-- Cette td renvoie à la page de mise à jour d'un étudiant depuis son id fiche étudiant ave l'id étudiant : page Maj Back office -->
                                <td><a href="3_maj.php?id_etudiant=<?php echo $ligne['id_etudiant']; ?>">Mise à jour</a></td>
                            </tr>
                            <!-- Fermeture de la boucle while avec l'accolade fermante ici : -->
                        <?php } ?>
                    </tbody>
                </table>
                <!-- fin table -->
            </div>
            <!-- fin col -->
        </section>
        <!-- fin row -->

        <section class="row justify-content-center p-4 m-4"> 
       
            <div class="col-md-8 mx-auto my-4 alert alert-dark text-light">
            <h2>Formulaire d'insertion d'un nouvel étudiant à la BDD</h>
                <!-- form avec action et method < action est vide car nous envoyons les données avec cette même page et POST va envoyer dans la superglobale $_POST -->

                <form action="" method="POST" class="">

                    <div class="mb-4">
                    <!-- https://getbootstrap.com/docs/5.1/forms/checks-radios/ -->
                        <label for="civilite" class="form-label">Civilité :</label> <br>
                        <input type="radio" name="civilite" value="Mme" id="civilite" checked>  Madame 
                        <input type="radio" name="civilite" value="M" id="civilite"> Monsieur 
                    </div>

                    <!-- Un select pour les cursus -->
                    <div class="mb-4">
                        <label for="cursus" class="form-label">Cursus</label> <br>
                    
                        <select name="cursus" id="cursus">
                            <option value="">-------------------</option>
                            <option value="Lettres">Lettres</option>
                            <option value="Arts plastiques">Arts plastiques</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="nom" class="form-label">Nom *</label>
                        <input type="text" name="nom" id="nom" class="form-control" required></input>
                    </div>

                    <div class="mb-4">
                        <label for="prenom" class="form-label">Prénom *</label>
                        <input type="text" name="prenom" id="prenom" class="form-control" required></input>
                    </div>

                    <div class="mb-4">
                        <label for="pseudo" class="form-label">Pseudo *</label>
                        <input type="text" name="pseudo" id="pseudo" class="form-control" required></input>
                    </div>
             
                    <!-- <div class="mb-4">
                        <label for="message" class="form-label">Votre message*</label>
                        <textarea name="message" id="message" cols="30" rows="5" class="form-control" required></textarea>
                    </div> -->
                                    
                    <button type="submit" class="btn btn-info">Ajouter</button>
                </form>
            </div>
            <!-- fin col -->
        </section>
        <!-- fin row -->

       <!-- gabarit pour une section -->
       <section class="row mb-4">
            <div class="col-md-6">
                <h2></h2>
                <?php
                    // debug($GLOBALS);
                ?>         
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
