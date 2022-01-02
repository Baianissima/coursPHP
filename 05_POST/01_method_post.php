<?php
 require_once '../inc/functions.php'; // appel des fonctions
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
        
    <title>Cours PHP - Chapitre 5 - 01 $_POST</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="bg-light">
    <!-- ====================================================== -->
    <!-- en-tête :  HEADER A COMPLETER AVEC NAV EN REQUIRE      --> 
    <!-- ====================================================== -->
    
    <header class="container-fluid p-4">
        <div class="col-12 text-center text-info">
            <h1 class="display-4">Cours PHP - Chapitre 5 - Methode POST</h1>
            <p class="lead">$_POST[ ] permet de recuperer les données saisies dans une formulaire</p>

            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
            <?php
                $varOla = "Olá !";
                echo "<p class=\"text-white\">$varOla tudo bem?</p>";
        
                whatDay();
            ?>
        </div>
    </header>
    <!-- fin container-fluid : header -->

    <div class="container justify-content-center mt-2 mb-2 p-2 m-auto">

        <section class="row">

            <div class="col-md-6">
                <h2>La méthode POST</h2>

                <ul>
                    <li>
                        $_POST [ ] est une superglobale qui récupere les données saisies dans un formulaire</li>

                        <li>Superglobale signifiqie que cette variable est disponible partout dans le scritp, y compris au sein des fonctions</li>

                        <li>Les informations sont récuperées dans un tableau (array) selon la syntaxe suivante :
                            <code><br>
                                $_POST  array( <br>
                                    'name1' => 'valeur1', <br>
                                    'name2' => 'valeur2' <br>
                                ); <br>
                            </code>                      
                        </li> 

                        <li>'name1' et 'name2' correspondent aux attributs 'name' du formulaire et 'valeur1' et v'valeur2' aux valeurs saisies par l'internaute.</li>             
                </ul>               
            </div>            
            <!-- fin col -->

            <div class="col-md-6">
                <h2>Exemple</h2>
                <!-- formulaire avec prenom, nom de famille, commentaire et un bouton d'envoi -->

                <!-- ELEMENTS A RAJOUTER AU FORM BOOTSTRAP : name, method, required,(remplacer l'id)... -->

                <form action="" method="POST">

                    <div class="row g-3 mb-2">
                       <div class="col">
                            <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prénom" aria-label="Prénom" required>
                       </div>

                       <div class="col">
                            <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom de famille" aria-label="Nom de famille" required>
                       </div>
                    </div>
                    <!-- fin row interne du form -->

                    <div class="row mb-2">
                        <div class="col">
                            <textarea name="message" id="message"  class="form-control" id="" rows="3">Votre message</textarea>
                        </div>
                    </div>     
                    <!-- fin row interne du form -->    

                    <div class="row mb-2">
                        <div class="col">
                            <button type="submit" class="btn btn-success mb-3">Envoyer</button>
                        </div>
                    </div>     
                    <!-- fin row interne du form -->       
                </form>
                <!-- fin form -->
            </div>            
            <!-- fin col -->
        </section>
        <!-- fin row -->

       
       
        <?php 

         // ici une row a etre completée par de données seulement si le formulaire est envoyé

            if (!empty($_POST)) { // si $_POST n'est pas vide = différent de empty (!empty) c'est qu'il est rempli et donc que e formulaire a été envoyé, on peut envoyer un formulaire avec des champs vides. Tout n'est pas obligatoire, les valeurs de $_POST sont alors des strings vides.
                echo "<section class=\"row bg-warning p-4\"><div class=\"col-md-12\"><h2>Données issues du formulaire</h2>";
                
                // echo "<p>Prenom :" .$_POST['prenom']. " Nom : " .$_POST['nom']. "</p>";

                echo "<p>Prenom : " .$_POST['prenom']. "</p>";

                echo "<p>Nom : " .$_POST['nom']. "</p>";

                echo "<p>Message : " .$_POST['message']. "</p>";

                echo "</div></section>";
        }
        // debug($_POST);
        // echo $_POST['nom'];
      ?>    
       


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