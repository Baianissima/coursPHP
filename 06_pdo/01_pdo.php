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

    <!-- fin containeur-fluid -->
    <header class="container-fluid f-header p-2">
        <div class="col-12 text-center">
            <h1 class="display-4">Connexion à notre BDD</h1>
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

        <section class="row mt-4">

            <div class="col-md-6">

                <h2 class="">1- Se connecter à la BDD <br>
                (suivre ces étapes)</h2>
                <p><abbr title="PHP Data Objetct">PDO</abbr> est l'acronyme de PHP Data Object</p>
                <p>Pour se connecter à la BDD en PDO on définit une variable de connexion <br>
                <code>
                    $pdoENT = new PDO('mysql:host=localhost;dbname=entreprise', <br>
                    'root', <br>
                    '', <br>
                    // 'root', // mdp pour MAC <br>
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

                'root',  // le pseudo ou l'utilsateur de la BDD

                '',  // ici le mot de passe en local sur PC est vide avec XAMPP
                
                // 'root', cette ligne commentée donne le mdp pour Mac avec MAMP

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

                    $requete = $pdoENT -> exec("INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('Jean', 'Saisrien', 'm', 'informatique', '2022-01-03', '2000')");

                    // Ici on delete les Jean Saisrien :
                    // $requete = $pdoENT->exec( "DELETE FROM employes WHERE prenom='Jean' AND nom='Saisrien' ");
                    // debug($requete);
                    // echo "Dernier id généré en BDD : " .$pdoENT->lastInsertId();

                    $requete = $pdoENT -> exec(" UPDATE employes SET nom='Bon' WHERE nom='Saisrien' ");
                ?>
            </div>
            <!-- fin col -->
        </section>
        <!-- fin section row -->

        <section class="row">
            <div class="col-md-6">
                <h2>3-Faire des requêtes avec <code>query()</code></h2>
                <p>La méthode <code>query()</code> est utilisée pour faire des requêtes qui retournent un ou plusieurs résultats : <code>SELECT</code><p>

                <?php
                    // SELECT * FROM employes WHERE prenom='Fabrice'
                    // 1 - On demande des informations à la BDD car il y a un ou plusieurs résultats

            
                    // $requete = $pdoENT-> query (" SELECT * FROM employes WHERE prenom='Fabrice' ");
                    $requete = $pdoENT-> query (" SELECT * FROM employes WHERE id_employes= 592 ");
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
                    // $requete = $pdoENT-> query (" SELECT * FROM employes WHERE id_employes= 592 ");
                    //Nom : Laura Blanchet ID : 592
                    // Salaire : 4500 euros - Service : direction
                    // Date d'embauche : 2005-06-09 euros - Sexe : f
                
                ?>
            </div>
            <!-- fin col -->

            <div class="col-md-6">
                <h2>Titre niveau 2</h2>
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