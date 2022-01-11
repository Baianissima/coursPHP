<!-- OUVRIR PHP ICI

 // pour arriver à cette page 3 il faut arriver avec $_GET : cliquer sur le lien "fiche" de la page 2
 
 // 1 APPEL DES FONCTIONS
//  require_once '../inc/functions.php'; // appel des fonctions

 // 2 - CONNEXION BDD
//  $pdoENT = new PDO('mysql:host=localhost;dbname=entreprise', // hôte et nom BDD
//                         'root',
//                         // '',  // mdp pour MAC avec XAMP
//                         'root', // mdp pour MAC avec MAMP
//                         array(
//                             PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
//                             PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', 
//                         ));
                        // debug($pdoENT);
                        // debug(get_class_methods($pdoENT));
                

// 3 RECEPTION DES INFORMATIONS AVEC $_GET
// debug($_GET);

// if ( isset($_GET['id_employes']) ) { // on demande le détail d'un employé

//     debug($_GET);
//     $resultat = $pdoENT->prepare( " SELECT * FROM employes WHERE id_employes = :id_employes ");
//     $resultat->execute(array(
//         ':id_employes' => $_GET['id_employes'] // On associe le marqueur vide à l'id_employes
//     ));
//     debug($resultat->rowCount());
//         if ($resultat->rowCount() == 0) { // Si le rowCount est égal à 0 c'est qu'il n'y as pas d'employé
//         header('location:02_employes.php'); // redirection vers la page de départ
//             exit(); // arret du script
//         }

//         $fiche = $resultat->fetch( PDO::FETCH_ASSOC); // Je passe les infos dans une variable
//         debug($fiche); // ferme if isset

//         } else {
//         header('location:02_employes.php'); // Si j'arrive sur la page avec rien dans l'url
//         exit(); // arret du script
//     }


// // 4 - TRAITEMENT DE MISE A JOUR D'UN EMPLOYE
// if (!empty($_POST)) {  // not empty
//     // debug($_POST);

//     $_POST['prenom'] = htmlspecialchars($_POST['prenom']); // pour se prémunir des failles et des injections SQL
//     $_POST['nom'] = htmlspecialchars($_POST['nom']);
//     $_POST['sexe'] = htmlspecialchars($_POST['sexe']);
//     $_POST['service'] = htmlspecialchars($_POST['service']);
//     $_POST['date_embauche'] = htmlspecialchars($_POST['date_embauche']);
//     $_POST['salaire'] = htmlspecialchars($_POST['salaire']);

//     $resultat = $pdoENT->prepare( " UPDATE employes SET prenom = :prenom, nom = :nom, sexe = :sexe, service = :service, date_embauche = :date_embauche, salaire = :salaire WHERE id_employes = :id_employes " ); // requête préparée avec des marqueurs

//     $resultat->execute( array(
//         ':prenom' => $_POST['prenom'],
//         ':nom' => $_POST['nom'],
//         ':sexe' => $_POST['sexe'],
//         ':service' => $_POST['service'],
//         ':date_embauche' => $_POST['date_embauche'],
//         ':salaire' => $_POST['salaire'],
//         ':id_employes' => $_GET['id_employes'],
//     ));

//     header ('location:02_employes.php');
//     exit();
//  }

// NAVBAR EN REQUIRE
//  require_once '../inc/navbar.inc.php';
// ?>

<!DOCTYPE html> -->
