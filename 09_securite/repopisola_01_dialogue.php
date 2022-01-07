<?php 

// 1 APPEL DES FONCTIONS
require_once '../inc/functions.php';  

// 2 CONNEXION BDD dialogue
$pdoDIA = new PDO( 'mysql:host=localhost;dbname=dialogue',// hôte nom BDD
              'root',// pseudo 
              // '',// mot de passe
              'root',// mdp pour MAC avec MAMP
              array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,// afficher les erreurs SQL dans le navigateur
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',// charset des échanges avec la BDD
              ));
              // debug($pdoDIA);
              // debug(get_class_methods($pdoDIA));

//  TRAITEMENT DU FORMULAIRE (version basique et non sécurisée)
// if ( !empty( $_POST )) {
// 	// debug($_POST);
// 	$insertion = $pdoDIA->query( " INSERT INTO commentaires (pseudo, message, date_enregistrement) VALUES ( '$_POST[pseudo]', '$_POST[message]', NOW()) " );
// }

// 3 TRAITEMENT DU FORMULAIRE
if ( !empty( $_POST )) {// est-ce que $_POST n'est pas vide
	$_POST['pseudo'] = htmlspecialchars($_POST['pseudo']);// pour se prémunir des failles et des injections SQL
	$_POST['message'] = htmlspecialchars($_POST['message']);

	$insertion = $pdoDIA->prepare( " INSERT INTO commentaires (pseudo, message, date_enregistrement) VALUES (:pseudo, :message, NOW()) ");// requete préparée avec des marqueurs

	$insertion->execute( array(
		':pseudo' => $_POST['pseudo'],
		':message' => $_POST['message'],
	));
}
?>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CoursPHP - Chapitre 09 - 01 sécurité dialogue</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>  
  <?php require_once '../inc/navbar.inc.php';// NAVBAR ?>
  <main>
    <header class="container-fluid f-header p-2">
      <h1 class="display-4 text-center">CoursPHP - Chapitre 09 - 01 sécurité, dialogue</h1>
      <p class="lead">Affichage, insertion de données dans une BDD</p>
    </header> 
    <!-- fin container-fluid header  -->
      <div class="container bg-white mt-2 mb-2 m-auto p-2">
  
        <section class="row">
  
          <div class="col-md-6">
            <h2>1 - Création d'une BDD</h2>
            <ul>
                <li>Nom de la BDD : dialogue</li>
                <li>1 table nom de la table : commentaires (vérifier que la table et la BDD sont avec le moteur InnoDB)</li>
                <li>la table contient les champs suivants : </li>
                <li>id_commentaires : INT(5) PK AI</li>
                <li>pseudo : VARCHAR(20)</li>
                <li>message : TEXT</li>
                <li>date_enregistrement : DATETIME</li>
            </ul>
            <h2>2 - Afficher les données</h2>
            <ul>
                <li>Se connecter à la BDD</li>
                <li>Afficher toutes les données depuis la table commentaires</li>
                <li>Avec query() et boucle while</li>
                <li>Compter les enregistrements</li>
                <li>Et afficher les commentaires dans un tableau HTML</li>
            </ul>
			<h2>3 - Insertion des données </h2>
			<ul>
				<li>Faire un formulaire HTML</li>
				<li>Avec method POST et action</li>
				<li>les names du form doivent correspondre au nom de colonnes</li>
			</ul>
          </div>
          <!-- fin col -->
  
          <div class="col-md-6">
            <?php
			// 3 affichage de données 
              $resultat = $pdoDIA->query( " SELECT * FROM commentaires " );
              // debug($resultat);
              $nbr_commentaires = $resultat->rowCount();
              // debug($nbr_commentaires);
            ?>
            <h5>Il y a <?php echo $nbr_commentaires; ?> commentaires </h5>

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
				 <!-- ouverture de la boucle while -->
               <?php while ( $commentaire = $resultat->fetch( PDO::FETCH_ASSOC )) { ?>
			   <tr>
				   <td><?php echo $commentaire['id_commentaires']; ?></td>
				   <td><?php echo $commentaire['pseudo']; ?></td>
				   <td><?php echo $commentaire['message']; ?></td>
				   <td><?php echo $commentaire['date_enregistrement']; ?></td>
			   </tr>
			   <!-- fermeture de la boucle -->
			   <?php } ?>
             </tbody>
            </table>
          </div>
          <!-- fin col -->
          </section>
        <!-- fin row -->  

		<section class="row">
  
          <div class="col-md-5">
            <h5>Insertion d'un message</h5>
			<!-- form avec action et method > action est vide car nous envoyons les données avec cette même page et POST va envoyer dans la superglobale $_POST -->
			<form action="" method="POST" class="border border-primary p-1">

				<div class="mb-3">
					<label for="pseudo" class="form-label">Votre pseudo</label>
					<input type="text" name="pseudo" id="pseudo" class="form-control" required>
				</div>

				<div class="mb-3">
					<label for="message" class="form-label">Votre message</label>
					<textarea name="message" id="message" cols="30" rows="5" class="form-control" required></textarea>
			   </div>

			   <button type="submit" class="btn btn-primary">Envoyer votre message</button>

			</form>

          </div>
          <!-- fin col -->
  
          <div class="col-md-4">
            
          </div>
          <!-- fin col -->
          </section>
        <!-- fin row -->  
      </div>
      <!-- fin container  -->
    </main>
      <?php require_once '../inc/footer.inc.php';// FOOTER ?>
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>