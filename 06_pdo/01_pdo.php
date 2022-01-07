<?php
 require_once '../inc/functions.php'; // appel des fonctions
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
        
    <title>Cours PHP - PDO</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="">
    <!-- ====================================================== -->
    <!-- en-tête :  HEADER A COMPLETER AVEC NAV EN REQUIRE      --> 
    <!-- ====================================================== -->
    
    <nav>
        <?php require_once '../inc/navbar.inc.php'; ?>
    </nav>

    <!-- fin containeur-fluid -->
    <header class="container-fluid f-header p-2">
        <div class="col-12 text-center">
            <h1 class="display-4">Connexion à nos BDDs</h1>
            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
            <?php
                $varOla = "Olá !";
                echo "<p class=\"text-white\">$varOla tudo bem?</p>";
        
                whatDay();
            ?>
        </div>
    </header>
    <!-- fin container-fluid header -->

    <div class="container mt-4 mb-4 p-2 m-auto">

        <section class="row mt-4">

            <div class="col-md-6">

                <h2 class="">1- Se connecter à une BDD <br>
                (suivre ces étapes)</h2>
                <p><abbr title="PHP Data Objetct">PDO</abbr> est l'acronyme de <code>PHP Data Object</code></p>
                <p>Pour se connecter à la BDD en PDO on définit une variable de connexion : <br>
                <code>
                    $pdoENT = new PDO('mysql:host=localhost;dbname=entreprise', <br>
                    <hr>
                    'root',   // laisser cette ligne comme ça 'root'<br>
                    <hr>
                    '',       // chaîne de carctères vide : pas de mdp pour PC, <br>
                    commenter qd travail sur Mac <br>
                    <hr>
                    'root',   // mdp pour MAC à décomenter <br>
                    <hr>
                    array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, <br>
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', <br>
                )); <br>
                </code></p>          
               

                <!-- un passage PHP  -->
                <!-- La variable de connexion a utiliser pour nous connecter a la BDD avec PHP :  -->

                <?php
                // connexion à la BDD avec passage en variables : commenté car pas utilisé ici !
                // passage en variables des informations de connexion
                // $host = 'localhost'; // le chemin vers le serveur de données, l'hôte,  (ici en chemin local c'est 'localhost', on n'est pas en ligne chez OVH par exemple)
                // $database = 'entreprise'; // le nom de la BDD
                // $user = 'root'; // le nom d'utilisateur pour se connecter à la BDD
                // $psw = ''; // le mot de passe utilisateur pour se connecter
                // $psw ='root';  root POUR MAC à la place $user


                // connexion à la BDD avec PDO (passage en objet PDO)
                // nom de la variable de connexion à la BDD : ENT = entreprise
                // cette variable nous sert partout où l'on doit se servir de cette connexion :

                $pdoENT = new PDO('mysql:host=localhost;dbname=entreprise',  // notre hôte ici c'est mysql qui contient localhost

                // en 1er lieu le nom du driver (mysql) (on pourrait comme driver avoir IBM, Oracle etc), nom du serveur (host), nom de la BDD (dbname)

                'root',  // le pseudo ou l'utilisateur de la BDD

                // '',  // ici le mot de passe en local sur PC est vide avec XAMPP
                
                'root', // cette ligne commentée donne le mdp pour Mac avec MAMP

                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,  // Pour afficher les erreurs SQL dans le navigateur
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', // Pour définir le carset (jeux de caracteres) des echanges avec la BDD
                ));

                // $pdoENT est un objet qui répresente la connexion à la BDD
                debug ($pdoENT); //le var_dump nous montre qu il s agit d'un OBJET et que l on n est pas en mode procédural !

                // debug(get_class_methods($pdoENT)); // Ici nous aurons la liste des méthodes présentes dans l'objet $pdoENT
                ?>
                
            </div>
            <!-- fin col -->

            <div class="col-md-6">
                <h2 class="">2- Faire des requêtes avec <code>exec()</code></h2>
                <p>La méthode <code>exec()</code> est utilisée pour faire des requêtes qui ne retournent pas de résultats : INSERT, DELETE, UPDATE</p>

                <ul>
                    <li>Succès : le <code>var_dump()</code> de la variable $requete donnera le nombre de lignes affectées par la requête = <code>X</code></li>                    
                    <li>Echec : <code>false = 0</code></li>
                </ul>

                <?php
                    // Toutes les lignes sont commentées afin de ne pas faire de requêtes inutiles en BDD

                        // Ici ma requête SQL que j'aurai testé avant dans phpMyAdmin :

                    // On va insérer un nouvel employé dans la BDD entreprise : révision SQL sur phpMyAdmin !

                    // INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('Jean', 'Saisrien', 'm', 'informatique', '2022-01-03', '2000');

                    // Il faut rafraichir la page, dans l 'occurence c'est cette page, pour voir executée cette requete :

                    // $requete = $pdoENT -> exec("INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('Jean', 'Saisrien', 'm', 'informatique', '2022-01-03', '2000')");

                    // Ici on delete les Jean Saisrien :
                    // $requete = $pdoENT->exec( "DELETE FROM employes WHERE prenom='Jean' AND nom='Bon' ");
                    // debug($requete);
                    // echo "Dernier id généré en BDD : " .$pdoENT->lastInsertId();

                    // $requete = $pdoENT -> exec(" UPDATE employes SET nom='Bon' WHERE nom='Saisrien' ");
                ?>
            </div>
            <!-- fin col -->
        </section>
        <!-- fin section row -->

        <section class="row">
            <div class="col-md-6">
                <h2>3-Faire des requêtes avec <code>query()</code></h2>
                <p>La méthode <code>query()</code> est utilisée pour faire des requêtes qui retournent un ou plusieurs résultats : <code>SELECT</code> mais aussi <code>DELETE</code>, <code>UPDATE</code> et <code>INSERT TO</code></p>

                <p>Pour information on peut mettre dans les paramètres de fetch() :
                
                <ul>
                    <li><code>PDO::FECTH_ASSOC : </code>pour obtenir un tableau associatif</li>

                    <li><code>PDO::FECTH_NUM : </code>pour obtenir un tableau avec desindices numériques</li>

                    <li><code>PDO::FECTH_OBJ : </code>pour obtenir un dernier objet</li>

                    <li>Ou encore des <code>parenthèses vides</code> : pour obtenir un mélange de tableau associatif et numérique</li>
                </ul>
                
                </p>

                <?php
                    // SELECT * FROM employes WHERE prenom='Fabrice'
                    // 1 - On demande des informations à la BDD car il y a un ou plusieurs résultats

            
                    $requete = $pdoENT-> query(" SELECT * FROM employes WHERE prenom='Fabrice' ");

                    
                    debug($requete);
                   

                    // 2 - Nous avons un objet $requete, nous ne voyaons pas encore les données concernant Fabrice, pour y accéder nous devons utiliser une méthode de $requetequi s'appelle fetch()

                    $ligne = $requete->fetch( PDO::FETCH_ASSOC );
                    // 3 - Avec fetch() on transforme l'objet $requete, avec le paramètre PDO::FETCH_ASSOC en un array associatif que l'on passe dans la variable $ligne : on y trouve les indices, les noms des colonnes de la table et les valeurs correspondantes

                    debug($ligne);
                   
                    // echo $ligne['prenom'];

                    echo "<p class=\"alert alert-warning\"> Nom : " .$ligne['prenom']. " " .$ligne['nom']. " ID : " .$ligne['id_employes']. " <br>";
                    echo "<p class=\"alert alert-warning\"> Salaire : " .$ligne['salaire']. " euros - Service : " .$ligne['service']. " <br>";
                    echo "<p class=\"alert alert-warning\"> Date d'embauche : " .$ligne['date_embauche']. " euros - Sexe : " .$ligne['sexe']. " </p>";
                    
                    // Exo : Affichez les infos de l'employé dont l'id est 592

                    // Réponse :

                    // // $requete = $pdoENT-> query (" SELECT * FROM employes WHERE id_employes= 592 ");
                    debug($requete);
        

                    $ligne = $requete -> fetch(PDO::FETCH_ASSOC);
                    // debug($ligne);

                    // Nom : Laura Blanchet ID : 592
                    // Salaire : 4500 euros - Service : direction
                    // Date d'embauche : 2005-06-09 euros - Sexe : f           
                ?>
            </div>
            <!-- fin col -->

            <div class="col-md-6">
                <h2>4 - Faire des requêtes avec <code>query()</code> et afficher plusieurs résultats</h2>

                <?php
                    // SELECT * FROM `employes` ORDER BY nom
                    $requete = $pdoENT -> query("SELECT * FROM employes ORDER BY nom");
                    $nbr_employes = $requete -> rowCount();
                    debug($nbr_employes);
                    echo "<p>Il y a $nbr_employes employes dans l'entreprise</p>";

                    while ( $ligne = $requete -> fetch(PDO::FETCH_ASSOC)) {
                        echo $ligne ['nom']. "<br>";
                    }

                    // EXO du 04/01/2022 : 
                    
                    // Afficher la liste des différents services dans une ul en mettant un service par li

                    // Afficher également le nombre de service

                    // SELECT DISTINCT(service) FROM employes ORDER BY service

                    $requete = $pdoENT -> query("SELECT DISTINCT(service) FROM employes ORDER BY service");
                    $nbr_services = $requete->rowCount(); /* Compter le nombre d'employer dans l'entreprise */
                    debug($nbr_services);

                    echo "<p>Il y a $nbr_services services dans l'entreprise :</p>";

                    echo "<ol>";
                    while ( $ligne = $requete -> fetch(PDO::FETCH_ASSOC)) {
                        echo "<li>" .$ligne['service']. "</li>";            
                    }
                    echo "</ol>";

                   //Autre possibilité :
                   // passage pp a  l interieur du html

                    // <ul>
                    //     <?php
                    // </ul> -->     
                ?>
            </div>
            <!-- fin col -->
        </section>
        <!-- fin row -->

        <section class="row">
            <div class="col-md-12">
                    <!-- EXO 1 :
                    Dans un h2 afficher la phrase suivante "Il y a X employés dans l'entreprise

                    Puis afficher TOUTES les informations des employés dans un tableau HTML

                    La requête SQL est triée par sexe puis par nom de famille
                -->           

                <!-- 1er passage PHP de cette div  -->
                <?php
                 $requete = $pdoENT -> query(" SELECT * FROM employes ORDER BY sexe ASC, nom ASC ");
                 $nbr_employes = $requete -> rowCount();
                 // debug($nbr_employes);
                 echo "<h2>Il y a $nbr_employes employés dans l'entreprise</h2>";
                 echo "<table class=\"table table-striped\">";
                   echo "<tr>";
                     echo "<th>Id</th>";
                     echo "<th>Nom, prénom</th>";
                     echo "<th>Service</th>";
                     echo "<th>Salaire mensuel</th>";
                     echo "<th>Date d'embauche</th>";
                   echo "</tr>";
                     while ( $ligne = $requete -> fetch(PDO::FETCH_ASSOC)) {
                       echo "<tr><td> n° " .$ligne['id_employes']. "</td>"; 
     
                       // if ... else
                       if( $ligne['sexe'] == 'f') {
                         echo "<td>Mme ";
                       } else {
                         echo "<td>M. ";
                       }
     
                       echo $ligne['prenom']. " " .$ligne['nom']. "</td>";
                       echo "<td>" .$ligne['service']. "</td>";
                       echo "<td>" .$ligne['salaire']. " € </td>";
                       echo "<td>" .$ligne['date_embauche']. "</td></tr>";
                     }
                 echo "</table>";
                 ?>  

                 <hr>

                <table class="table table-striped table-success">
                   <tr>                
                     <th>Nom, prénom</th>
                     <th>Service</th>
                   </tr>

                    <!-- 2eme passage PHP de cette div  -->
                   <?php 
                        foreach ( $pdoENT -> query( " SELECT nom, prenom, sexe, service FROM employes ORDER BY sexe ASC, nom ASC " ) as $infos ) {
                            // $infos fabrique un tableau à chaque tour de boucle pour chaque enregistrement, nous pouvons ensuite les parcourir 
                            // debug($infos);
                            echo "<tr>";
                            // IF ... ELSE
                            if( $infos['sexe'] == 'f') {
                            echo "<td> Mme. ";
                            } else {
                            echo "<td> M. ";
                            }
                        echo $infos['nom']. " " .$infos['prenom']. "</td><td>" .$infos['service']. "</td></tr>";
                        }
                    ?> 
                </table>
                <!-- fin table avec passage php à l'interieur -->

                <!-- // code d'Imram pour ce tableau d'exo :

                    // $requete = $pdoENT -> query ( " SELECT * FROM employes ORDER BY sexe ASC, nom ASC " );
                    // $info = $requete -> rowCount();  /* Compter le nombre d'employer dans l'entreprise */

                    // echo "<h2 class=\"alert alert-primary\">Il y a $info employes dans l'entreprise</h2>";

                    // echo "<table class=\"table table-hover table-striped\">";

                    // echo  "<tr>  <th scope=\"col\">ID</th>  <th scope=\"col\">Prénom Nom</th>  <th scope=\"col\">Sexe</th>  <th scope=\"col\">Service</th>  <th scope=\"col\">Date_embauche</th>  <th scope=\"col\">Salaire</th>  </tr>";
                    // while($ligne=$requete->fetch(PDO::FETCH_ASSOC)){
                    // echo "<tr><th scope=\"row\">".$ligne['id_employes']."</th><td>".$ligne['prenom']." ".strtoupper($ligne['nom'])."</td><td>".$ligne['sexe']."</td><td>".$ligne['service']."</td><td>".$ligne['date_embauche']."</td><td>".$ligne['salaire']."</td></tr>";
                    // }
                    // echo "</table>"; -->

                <hr>

                <!-- Un autre accès à la BDD enreprise avec while + foreach pour faire un tableau -->
                <?php
                    $resultat = $pdoENT->query(" SELECT * FROM employes ORDER BY id_employes ");
                    $nombre_employes = $resultat->rowCount();
                    debug($nombre_employes);
                    echo '<h5 class="bg-cyan">Il y a ' .$nombre_employes. ' colaborateurs dans l\'entreprise </h5>'; 
                    // les lignes d'en-tête du tableau
                    echo '<table class="table table-striped table-dark">';
                    echo '<thead><tr>';
                    echo '<th>ID</th>';
                    echo '<th>Nom</th>';
                    echo '<th>Prénom</th>';
                    echo '<th>Sexe</th>';
                    echo '<th>Service</th>';
                    echo '<th>Date d\'embauche</th>';
                    echo '<th>Salaire</th>';
                    echo '</tr></thead>';
                    echo '<tbody>';

                    // boucle while avec foreach
                    while ($employe = $resultat->fetch(PDO::FETCH_ASSOC)){
                        echo '<tr>';
                        foreach ($employe as $informations){
                            echo '<td>' .$informations. '</td>';
                        }
                        echo '</tr>';
                    }
                    echo '</tbody></table>';
                ?>
            </div>
            <!-- fin col -->
        </section>
        <!-- fin row -->

        <section class="row p-2">
           <div class="col-md-8 bg-cyan">
               <h2>Faire des requêtes préparées avec <code>prepare()</code></h2>
               <p>Les requêtes préparées sont préconisées si vous exécutez plusieurs fois la même requête : cela fait gagner du temps !</p>
               <p>Elles permettent de "nettoyer" les données et de prémunir des injections de type SQL qui sont des tentatives de piratages. Cf. chapitre 09</p>
               <p>Une requête préparée se réalise en 3 étapes :</p>

               <code>
                    $nom = 'Lagarde';  // on cherche un résultat <br>
                    $resultat = $pdoENT->prepare("SELECT * FROM employes WHERE nom = :nom "); <br> //1 - On prépare la requête sans l'exécuter. Ici :nom est un marqueur qui est vide pour le moment <br>
                    $resultat->bindParam(':nom', $nom); <br> // 2 - On lie le marqueur, on fait la liaison entre le marqueur et la variable, dans les paramètres de bindParam <br>
                    $resultat->execute(); <br>// 3 - On exécute la requête, on fabrique un tableau associatif maintenant
                    $employe = $resultat->Fetch (PDO::FETCH_ASSOC); <br>
                    // debug($employe);
                    echo '<p>' .$employe['nom']. ' '.$employe['prenom']. '  '.$employe['service'] . ' . Date d\'embauche : ' .$employe['date_embauche']. ' </p>'; <br>// ici on fait un echo des résultats          
               </code>

                <?php
                    $nom = 'Lagarde';  // on cherche un résultat
                    $resultat = $pdoENT->prepare("SELECT * FROM employes WHERE nom = :nom ");  //1 - On prépare la requête sans l'exécuter. Ici :nom est un marqueur qui est vide pour le moment
                    $resultat->bindParam(':nom', $nom); // 2 - On lie le marqueur, on fait la liaison entre le marqueur et la variable, dans les paramètres de bindParam
                    $resultat->execute(); // 3 - On exécute la requête, on fabrique un tableau associatif maintenant
                    $employe = $resultat->Fetch (PDO::FETCH_ASSOC);
                    // debug($employe);
                    echo '<p>' .$employe['nom']. ' '.$employe['prenom']. '  '.$employe['service'] . ' . Date d\'embauche : ' .$employe['date_embauche']. ' </p>'; // ici on fait un echo des résultats
                    
                    echo '<hr>';

                    $sexe = 'f';  // On cherche plus d'un résultat
                    $resultat = $pdoENT->prepare(" SELECT * FROM employes WHERE sexe = :sexe "); // 1 - On préaprer la requête
                    $resultat->bindParam( ':sexe', $sexe); // 2 - On lie le marqueur
                    $resultat->execute(); // 3 - On execute la requête
                    $nombre_employes = $resultat->rowCount();

                    // debug($nombre_employes);
                    echo '<h4> Il y a ' .$nombre_employes. ' résultats </h4>';

                    while ( $informations = $resultat->fetch (PDO::FETCH_ASSOC)) {
                        // debug($informations);
                        echo $informations['nom'];
                        echo '<p>' .$informations['nom']. ' '.$informations['prenom']. '  '.$informations['service'] . ' . Date d\'embauche : ' .$informations['date_embauche']. ' </p>'; // ici on fait un echo des résultats;
                    }

                    echo '<hr>';
                    // requête préparée sans bindParam()
                    echo '<h4>Requête préparée sans bindParam() </h4>';
                    $resultat = $pdoENT->prepare( " SELECT * FROM employes WHERE nom = :nom AND prenom = :prenom "); // 1 - on prépare la requête
                    $resultat->execute(array(  // 2 - On exécute la requête en fabriquant un tableau
                        ':nom' => 'Blanchet',
                        ':prenom' => 'Laura'
                    ));
                    debug($resultat);
                    $informations = $resultat->fetch (PDO::FETCH_ASSOC);
                    debug($informations); // on a l'enregistrement qui correspond à la requête
                    // echo $informations['nom'];
                    echo '<p> - Nom : ' .$informations['nom']. ' - Prenom : ' .$informations['prenom']. ' - Service : ' .$informations['service']. ' - Date d\'embauche : ' .$informations['date_embauche']. '</p>';
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