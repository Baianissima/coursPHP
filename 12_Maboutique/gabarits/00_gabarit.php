<!-- GABARIT pour APPEL DES FONCTIONS et CONNEXION BDD et TRAITEMENT FORMULAIRE -->

<!-- OUVRIR PHP ICI
 // 1 - APPEL DES FONCTIONS
    // require_once '../inc/functions.php';
 

 // 2 - CONNEXION BDD : ici c'est la BDD DIALOGUE : remplacer DIA et DIALOGUE en fonction de la nouvelle BDD
//  $pdoDIA = new PDO('mysql:host=localhost;dbname=dialogue',
//                         'root',
//                         // '',  // mdp pour PC a decomenter si travail sur PC
//                         'root', // mdp pour MAC a decomenter si travail sur MAC
//                         array(
//                             PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
//                             PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', 
//                         ));
                        // debug($pdoDIA);
                        // debug(get_class_methods($pdoDIA));

// Ici une demo seulement : TRAITEMENT DU FORMULAIRE (version basique, et c'est la version non sécurisée)
//  if ( !empty( $_POST )) {
//     //  debug($_POST);
//     $insertion = $pdoDIA->query( " INSERT INTO commentaires (pseudo, message, date_enregistrement) VALUES ( '$_POST[pseudo]', '$_POST[message]', NOW()  ) ");
//  }


// 3 - TRAITEMENT DU FORMULAIRE
//  if ( !empty( $_POST )) {  // Ici on lit : "Si $_POST n'est pas vide..."
//     $_POST['pseudo'] = htmlspecialchars($_POST['pseudo']); // pour se prémunir des failles et des injections SQL
//     $_POST['message'] = htmlspecialchars($_POST['message']);

//     $insertion = $pdoDIA->prepare( " INSERT INTO commentaires (pseudo, message, date_enregistrement) VALUES (:pseudo, :message, NOW()) ");

//     $insertion->execute( array(
//         ':pseudo' => $_POST['pseudo'],
//         ':message' => $_POST['message'],

//     ));
//  }

 // NAVBAR EN REQUIRE
//  require_once '../inc/navbar.inc.php';
// FERMER PHP ICI

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- ====================================================== -->
    <!--              HEAD EN REQUIRE                           --> 
    <!-- ====================================================== -->

    <!-- required my tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->

    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
    <title>TITRE DE LA PAGE POUR LE NAVIGATEUR</title>

    <!-- mes styles en INTERNE ou EXTERNE -->
    <!-- <style>
            
    </style> -->
    <!-- <link rel="stylesheet" href="../css/styles.css"> -->
</head>

<body class="">
   <!-- ====================================================== -->
    <!-- en-tête :  HEADER A COMPLETER AVEC NAV EN REQUIRE      --> 
    <!-- ====================================================== -->
    
    
    <header class="container-fluid f-header p-2">

    <!-- ====================================================== -->
    <!--              AJOUTER LA NAV BAR ICI                --> 
    <!-- ====================================================== -->
        <div class="col-12 text-center">
            <h1 class="display-4 text-center">PHP</h1>
            <p class="lead">Chapitre / Page</p>
            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
            <?php
                $varOla = "Olá!";
                echo "<p class=\"text-white\">$varOla Tudo bem?</p>";
                whatDay();
            ?>
        </div>
    </header>
    <!-- fin container-fluid header -->

    <div class="container justify-content-center bg-light mt-2 mb-2 p-2 m-auto">

        <section class="row mt-4 p-4">
            <div class="col-md-6">
                <h2 class="alert-info">TITRE NIVEAU 2</h2>
                <p>PARAGRAPHE</p>
                <p>PARAGRAPHE</p>
                <p>PARAGRAPHE</p>
                <p>PARAGRAPHE</p>               
                <!-- un passage PHP  -->           
            </div>
            <!-- fin col -->

            <!-- div pour une UL < LI -->
            <div class="col-md-6">
                <h2 class="alert-info">TITRE NIVEAU 2</h2>
                <ul>
                    <li>1 LIGNE DE LA LI</li>
                    <li>1 LIGNE DE LA LI</li>
                    <li>1 LIGNE DE LA LI</li>
                    <li>1 LIGNE DE LA LI</li>                   
                    </li>
				</ul>
            </div>
            <!-- fin col -->
        </section>
        <!-- fin section row -->


        <section class="row mb-4">
            <div class="col-md-6">
                <h2>5 - L'insertion d'informations
                <h5>Les information ajoutées dans ce formulaire doivent apparaître dans le tableau d'à côté ----------------------------------------------------> </h5>
                <!-- form avec action et method < action est vide car nous envoyons les données avec cette même page??? et POST va envoyer dans la superglobale $_POST -->

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
        </section>
        <!-- fin row -->

        <!-- section row pour un tableau -->
        <section class="row">
            <div class="col-md-6 justify-content-center"">
                    <h2>4 - Total de commentaires : <?php echo $nbr_tapernomdelavariable; ?></h2>
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
                            <td><?php echo $tapernomdelavariable['id_commentaires']; ?></td>
                            <td><?php echo $tapernomdelavariable['pseudo']; ?></td>
                            <td><?php echo $tapernomdelavariable['message']; ?></td>
                            <td><?php echo $tapernomdelavariable['date_enregistrement']; ?></td>
                            </tr>
                            <!-- Fermeture de la boucle while avec l'accolade fermante ici : -->
                            <?php } ?>
                        </tbody>
                    </table>
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