<?php
 
 // 1 APPEL DES FOCTIONS
 require_once '../inc/functions.php'; // appel des fonctions

 // 2 - CONNEXION BDD
 $pdoENT = new PDO('mysql:host=localhost;dbname=entreprise',
                        'root',
                        // '',  // mdp pour MAC avec XAMP
                        'root', // mdp pour MAC avec MAMP
                        array(
                            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', 
                        ));
                        // debug($pdoENT);
                        // debug(get_class_methods($pdoENT));
                        // debug($_GET);

                        // if (isset$_GET['id_employe'])) {
                        // }

//  if ( !empty( $_POST )) {
//     //  debug($_POST);
//     $insertion = $pdoDIA->query( " INSERT INTO commentaires (pseudo, message, date_enregistrement) VALUES ( '$_POST[pseudo]', '$_POST[message]', NOW()  ) ");
//  }


// 3 - TRAITEMENT DU FORMULAIRE

 if (!empty($_POST)) {  // Ici on lit : "Si $_POST n'est pas vide..."
    debug($_POST);

    $_POST['prenom'] = htmlspecialchars($_POST['prenom']); // pour se prémunir des failles et des injections SQL
    $_POST['nom'] = htmlspecialchars($_POST['nom']);
    $_POST['sexe'] = htmlspecialchars($_POST['sexe']);
    $_POST['service'] = htmlspecialchars($_POST['service']);
    $_POST['date_embauche'] = htmlspecialchars($_POST['date_embauche']);
    $_POST['salaire'] = htmlspecialchars($_POST['salaire']);

    $insertion = $pdoENT->prepare( " INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES (:prenom, :nom, :sexe, :service, :date_embauche, :salaire) "); // requête préparée avec des marqueurs

    $insertion->execute( array(
        ':prenom' => $_POST['prenom'],
        ':nom' => $_POST['nom'],
        ':sexe' => $_POST['sexe'],
        ':service' => $_POST['service'],
        ':date_embauche' => $_POST['date_embauche'],
        ':salaire' => $_POST['salaire'],
    ));
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
    <!-- <link rel="stylesheet" href="../css/styles.css"> -->
</head>

<body class="">
    <!-- ====================================================== -->
    <!-- en-tête :  HEADER A COMPLETER AVEC NAV EN REQUIRE      --> 
    <!-- ====================================================== -->

    <!-- fin containeur-fluid -->
    <nav>
        <?php require_once '../inc/navbar.inc.php'; ?>
    </nav>
    
    <header class="container-fluid f-header p-2 text-info">
        <div class="col-12 text-center">
            <h1 class="display-4">PHP</h1>
            <p class="lead">Chapitre 09_securite / Page 03_fiche_employe</p>
            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
            <?php
                $varOla = "Olá !";
                echo "<p class=\"text-white\">$varOla tudo bem?</p>";
        
                // whatDay();
            ?>
        </div>
    </header>
    <!-- fin container-fluid header -->

    <div class="container mt-4 mb-4 p-2 m-auto">
        <section class="row">
            <div class="col-md-12">
                <h2>1 - Afficher des données de la table employés sur un tableau :</h2>

                <!-- pour limiter le nombre a afficher à 5 employés seulement : ajouter LIMIT 5 apres DESC -->

                <?php
                    $resultat = $pdoENT->query( " SELECT * FROM employes ORDER BY id_employes DESC");
                    // debug($resultat);
                    $nbr_employes = $resultat->rowCount();
                    // debug($nbr_commentaires);
                ?>
            </div>
            <!-- fin col -->        
            </div>
        </section>
        <!-- fin row -->


        <section class="row">
            <div class="col-md-6">
                <h2>Il y a <?php echo $nbr_employes; ?> employés :</h2>
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
                            <th>Fiche employé</th>
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
                            <!--  -->
                            <td><a href="03_fiche_employe.php?id_employe=<?php echo $ligne['id_employes']; ?>">Fiche</a></td>
                        </tr>
                        <!-- Fermeture de la boucle while avec l'accolade fermante ici : -->
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- fin col -->

            <div class="col-md-6">
                <h2>Formulaire d'insertion d'un nouvel employé</h2>
                <!-- form avec action et method < action est vide car nous envoyons les données avec cette même page??? et POST va envoyer dans la superglobale $_POST -->

                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" name="prenom" id="prenom" class="form-control" required></input>
                    </div>

                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom de famille</label>
                        <input type="text" name="nom" id="nom" class="form-control" required></input>
                    </div>

                    <div class="mb-3">
                    <!-- voir doc bootstrap pour le bouton radio des forms -->
                        <label for="sexe" class="form-label">Sexe :</label> <br>
                        <input type="radio" name="sexe" value="f" id="sexe" checked> Femme</input> <br>
                        <input type="radio" name="sexe" value="m" id="sexe" checked> Homme</input> <br>         
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

                    <button type="submit" class="btn btn-success">Ajouter un employé</button>
                    
                    <!-- <div class="mb-3">
                        <label for="message" class="form-label">Votre message</label>
                        <textarea name="message" id="message" cols="30" rows="5" class="form-control" required></textarea>
                    </div> -->
                </form>
            </div>
            <!-- fin col -->
        </section>
        <!-- fin row -->

        <section class="row">
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