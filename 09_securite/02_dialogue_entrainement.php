<?php 

// 1 APPEL DES FONCTIONS
require_once '../inc/functions.php';  

// 2 CONNEXION BDD dialogue
$pdoDIA = new PDO( 'mysql:host=localhost;dbname=dialogue',// hôte nom BDD
              'root',// pseudo 
              '', // mot de passe
              // 'root',// mdp pour MAC avec MAMP
              array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,// afficher les erreurs SQL dans le navigateur
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',// charset des échanges avec la BDD
              ));
              // debug($pdoDIA);
              // debug(get_class_methods($pdoDIA));


// 3 TRAITEMENT DU FORMULAIRE SÉCURISÉ AVEC UNE REQUÊTE PRÉPARÉE
if ( !empty( $_POST )) {// est-ce que $_POST n'est pas vide
	$_POST['pseudo'] = htmlspecialchars($_POST['pseudo']);// pour se prémunir des failles et des injections SQL
	$_POST['message'] = htmlspecialchars($_POST['message']);

	$insertion = $pdoDIA->prepare( " INSERT INTO commentaires (pseudo, message, date_enregistrement) VALUES (:pseudo, :message, NOW()) " );// requete préparée avec des marqueurs

	$insertion->execute( array(
		':pseudo' => $_POST['pseudo'],
		':message' => $_POST['message'],
	));
}

// NAVBAR EN REQUIRE
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

    <!-- Google Fonts à compléter avec les links -->

    
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

    <header class="container-fluid f-header p-2 text-info">
        <div class="col-12 text-center">
            <h1 class="display-4">PHP</h1>
            <p class="lead">Chapitre 09_securite / Page 01_dialogue</p>
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

        <section class="row mb-4">
            <div class="col-md-6">
                <h2>2 - Connexion à la BDD dialogue</h2>
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


        <section class="row mb-4">

            <div class="col-md-12">
                <h2>3 - Afficher les données d'abord avec un var_dump (ma fonction debug)</h2>

                <?php
                    $resultat = $pdoDIA->query( " SELECT * FROM commentaires ORDER BY id_commentaires ");
                    // debug($resultat);
                    $nbr_commentaires = $requetes->rowCount();
                    // debug($nbr_commentaires);
                ?>
            </div>
            <!-- fin col -->  
        </section>
        
        
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

            <!-- MODELO FORMULARIO
        
            <form method="post" class="col-md-7 mx-auto mt-3 mb-4 " enctype="multipart/form-data">
	        <div class="form-row">               
	            <div class="form-group col-md-8">
	                <label for="titre">TITRE *</label>
	                <input type="text" class="form-control <?php if(isset($errorTitre)) echo $border; ?>" id="titre" name="titre" value="<?php if(isset($titre)) echo $titre; ?>"> 
	                <?php if(isset($errorTitre)) echo $errorTitre; ?>
	            </div>
	        </div>
	        <div class="form-row"> 
	            <div class="form-group col-md-12">
	                <label for="adresse">ADRESSE *</label>
	                <input type="text" class="form-control <?php if(isset($errorAdresse)) echo $border; ?>" id="adresse" name="adresse" value="<?php if(isset($adresse)) echo $adresse; ?>">
	                <?php if(isset($errorAdresse)) echo $errorAdresse; ?>
	            </div>
	        </div>
	        <div class="form-row">                    
	            <div class="form-group col-md-6">
	                <label for="cp">CODE POSTAL *</label>
	                <input type="text" class="form-control <?php if(isset($errorCp)) echo $border; ?>" id="cp" name="cp" value="<?php if(isset($cp)) echo $cp; ?>">
	                <?php if(isset($errorCp)) echo $errorCp; ?>
	            </div>  
	            <div class="form-group col-md-6">
	                <label for="ville">VILLE *</label>
	                <input type="text" class="form-control <?php if(isset($errorVille)) echo $border; ?>" id="ville" name="ville" value="<?php if(isset($ville)) echo $ville; ?>">
	                <?php if(isset($errorVille)) echo $errorVille; ?>
	            </div>  
	        </div>
	        <div class="form-row">
	            <div class="form-group col-md-4">
	                <label for="surface">SURFACE EN M² *</label>
	                <input type="text" class="form-control <?php if(isset($errorSurface)) echo $border; ?>" id="surface" name="surface" value="<?php if(isset($surface)) echo $surface; ?>">
	                <?php if(isset($errorSurface)) echo $errorSurface; ?>
	            </div>
	            <div class="form-group col-md-4">
	                <label for="prix">PRIX *</label>
	                <input type="text" class="form-control <?php if(isset($errorPrix)) echo $border; ?>" id="prix" name="prix" value="<?php if(isset($prix)) echo $prix; ?>">
	                <?php if(isset($errorPrix)) echo $errorPrix; ?>
	            </div>
	            <div class="form-group col-md-4">
	                <label for="type">TYPE *</label>
	                <select class="form-control" id="type" name="type">
	                    <option value="location" <?php if(isset($type) && $type == 'location') echo 'selected'; ?> >LOCATION</option>
	                    <option value="vente" <?php if(isset($type) && $type == 'vente') echo 'selected'; ?>>VENTE</option>
	                </select>
	            </div> 
	        </div>
	        <div class="form-row">
	            <div class="form-group col-md-12">
	                <label for="description">DESCRIPTION</label>
	                <textarea class="form-control" id="description" name="description" rows="5" ><?php if(isset($description)) echo $description; ?></textarea>
	            </div>
	        </div>
	        <div class="form-row">
	            <div class="form-group col-md-8">
	                <label for="photo">PHOTO</label>
	                <input type="file" class="form-control <?php if(isset($errorPhoto)) echo $border; ?>" id="photo" name="photo">
	                <small class="col-md-6 align-baseline ml-1 mr-1">Extensions autorisées : jpg, jpeg, png</small>
	                <?php if(isset($errorPhoto)) echo $errorPhoto; ?>
	            </div>
	            <?php if(!empty($photo)) : ?>
	            <p class="text-center col-md-4">
	            <em>Vous pouvez uploader une photo si vous souhaitez la changer</em><br>
	            <img src="<?= $photo ?>" alt="<?= $titre ?>" style="width: 150px">
	            </p>
	            <?php endif; ?>  
	        </div>
	        <div class="form-row justify-content-between">
	            <small class="col-lg-8  col-md-6 align-baseline ml-1 mr-1 p-1">Les champs suivis d'une * sont obligatoires</small>
	            <button type="submit" class="btn btn-dark col-lg-3 col-md-5 ml-1 mr-1 text-nowrap"><?php if(isset($_GET['action']) && !empty($_GET['action'])) echo strtoupper($_GET['action']); else echo "AJOUTER"; ?> LOGEMENT</button>
	        </div>            
	    </form>


        
        -->

            <div class="col-md-6">
                <h2>4 - Total de commentaires : <?php echo $nbr_commentaires; ?></h2>
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