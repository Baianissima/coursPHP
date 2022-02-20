<!-- GABARIT pour APPEL DES FONCTIONS et CONNEXION BDD et TRAITEMENT FORMULAIRE -->

<!-- // OUVRIR PHP ICI 
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
// ?> -->

<!-- // <!DOCTYPE html> -->
