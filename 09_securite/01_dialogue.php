<?php
 
 // 1 APPEL DES FOCTIONS
 require_once '../inc/functions.php'; // appel des fonctions

 // 2 - CONNEXION BDD : DIALOGUE
 $pdoDIA = new PDO('mysql:host=localhost;dbname=dialogue',
                        'root',
                        // '',
                        'root',
                        array(
                            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', 
                        ));
                        // debug($pdoDIA);
                        // debug(get_class_methods($pdoDIA));

 // 3 - TRAITEMENT DU FORMULAIRE (version basique, et c'est la version non sécurisée)
 if ( !empty( $_POST )) {
    //  debug($_POST);
    $insertion = $pdoDIA->query( " INSERT INTO commentaires (pseudo, message, date_enregistrement) VALUES ( '$_POST[pseudo]', '$_POST[message]', NOW()  ) ");
 }
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
        
    <title>Cours PHP - Chapitre 09 : sécurité (01 dialogue)</title>

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
            <h1 class="display-4">Cours PHP - Chapitre 09 : sécurité</h1>
            <p class="lead">01 dialogue</p>
            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
            <?php
                $varOla = "Olá !";
                echo "<p class=\"text-white\">$varOla tudo bem?</p>";
        
                whatDay();
            ?>
        </div>
    </header>
    <!-- fin container-fluid header -->

    <div class="container mt-2 mb-2 p-2 m-auto">
        <section class="row">
            <div class="col-md-12">
                <h2>1- Création d'une BDD</h2>
                <ul>
                    <li>Nom de la BDD : dialogue</li>
                    <li>Faire 1 table, le nom de la table est : commentaires (vérifier que la table et la BDD sont avec le moteur InnoDB</li>
                    <li>La table contient les champs suivants :</li>
                    <li>id_commentaires : INT(5) PK AI</li>
                    <li>pseudo : VARCHAR(20)</li>
                    <li>message : TEXT</li>
                    <li>date_enregistrement : DATETIME</li>
                </ul>
            </div>
            <!-- fin col -->
        </section>
        <!-- fin row -->

        <section class="row">
            <div class="col-md-6">
                <h2>2-Connexion à la BDD dialogue</h2>
                <ul>
                    <li>Se connecter à la BDD en haut de page, avant le DOCTYPE.</li>
                    <li>Afficher toutes les données depuis la table commentaires</li>
                    <li>Avec query() et boucle while</li>
                    <li>Compter les enregistrements</li>
                    <li>Et afficher les commentaires dans un tableau HTML</li>
                </ul>
            </div>
        <!-- fin col -->
        </section>
        <!-- fin row -->

        <section class="row">
            <div class="col-md-12">
            <div class="col-md-6">
                <h2>3 - Afficher les données</h2>

                <?php
                    $resultat = $pdoDIA->query( " SELECT * FROM commentaires ");
                    debug($resultat);
                    $nbr_commentaires = $resultat->rowCount();
                    // debug($nbr_commentaires);
                ?>
            </div>
            <!-- fin col -->        
            </div>
        </section>
        <!-- fin row -->


        <section class="row">
            <div class="col-md-12">
                <h2>Il y a <?php echo $nbr_commentaires; ?> commentaires !</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>Id</th>
                        <th>Pseudo</th>
                        <th>Message</th>
                        <th>Date d'enregistrement</th>
                        </tr>
                    </thead>
                    <tbody>
                <!-- Ouverture de la boucle while avec l'accolade ouvrante ici :-->
                        <?php while ( $commentaire = $resultat->fetch(PDO::FETCH_ASSOC)){?>
                        <tr>
                        <td><?php echo $commentaire['id_commentaires']; ?></td>
                        <td><?php echo $commentaire['pseudo']; ?></td>
                        <td><?php echo $commentaire['message']; ?></td>
                        <td><?php echo $commentaire['date_enregistrement']; ?></td>
                        </tr>
                        <!-- Fermeture de la boucle while avec l'accolade fermante ici : -->
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- fin col -->
        </section>
        <!-- fin row -->


        <section class="row">
            <div class="col-md-6">
                <h2>Insertion d'un message</h2>
                <!-- form avec action et method < action est vide car nous envoyons les données avec cette même page??? et POST va envoyer dans la superglobale $_POST -->
                <ul>
                  <li>Faire un formulaire HTML</li>
                  <li>Avec method et POST</li>
                </ul>

                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="pseudo" class="form-label">Votre pseudo</label>
                        <input type="text" name="pseudo" id="pseudo" class="form-control" required></input>
                    </div>
                    
                    <div class="mb-3">
                        <label for="message" class="form-label">Votre message</label>
                        <textarea name="message" id="message" cols="30" rows="5" class="form-control" required></textarea>
                    </div>
                                    
                    <input type="submit"></input>
                </form>
            </div>
            <!-- fin col -->


            <div class="col-md-6">
                <h2></h2>
               
            </div>
            <!-- fin col -->   
        </section>
        <!-- fin row -->

        <section class="row">
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