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
        
    <title>Cours PHP - Exos - Form</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="bg-light">
   <!-- ====================================================== -->
    <!-- en-tête :  HEADER A COMPLETER AVEC NAV EN REQUIRE      --> 
    <!-- ====================================================== -->
    
    <nav>
        <?php require_once '../inc/navbar.inc.php'; ?>
    </nav>
    
    <header class="container-fluid p-4">
        <div class="col-12 text-center text-info">
            <h1 class="display-4">PHP</h1>
            <p class="lead">Exos - Form / Exercice traitement d'un formulaire</p>

            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
            <?php
                $varOla = "Olá !";
                echo "<p class=\"text-white\">$varOla tudo bem?</p>";
        
                // whatDay();
            ?>
        </div>
    </header>
    <!-- fin container-fluid : header -->

    <div class="container mt-4 mb-4 p-2 m-auto">

        <section class="row">
            <div class="col-md-6">
                <h2>Formulaire</h2>

                <ul>           
                    <li>EXO : faire un formulaire avec les champs PRENOM, NOM, E-MAIL, ADRESSE, CODE POSTALE, VILLE et TELEPHONE.</li>
                    
                    <li>Le champ prenom n'est pas obligatoire.</li>

                    <li>Le traitement du formulaire se fait dans un second fichier nommé 04_traitement_form.php</li>

                    <li>L'attribut "action" de la balise "form" contient donc le nom de ce fichier placé dans le même dossier que notre page avec le "form"</li>
                </ul>
            </div>


            <div class="col-md-6">
                <form action="04_traitement_form.php" method="POST">

                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom">
                    </div>
                    <!-- fin prénom -->

                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" required>
                    </div>
                    <!-- fin nom -->

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <!-- fin email -->

                    <div class="form-group">
                        <label for="code_postal">Code postal</label>
                        <input type="number" class="form-control" id="code_postal" name="code_postal" min="01000" max="99999" required>
                    </div>
                    <!-- fin code postal -->

                    <div class="form-group">
                        <label for="">Adresse</label>
                        <input type="text" class="form-control" id="adresse" name="adresse" required>
                    </div>
                    <!-- fin adresse -->

                    <div class="form-group">
                        <label for="ville">Ville</label>
                        <input type="text" class="form-control" id="ville" name="ville" required>
                    </div>
                    <!-- fin ville -->

                    <div class="form-group">
                        <label for="telephone">Téléphone</label>
                        <input type="number" class="form-control" id="telephone" name="telephone" required>
                    </div>
                    <!-- fin ville -->

                    <div class="row mb-2">
                        <div class="col">
                            <textarea name="message" id="message"  class="form-control" rows="3"></textarea>
                        </div>
                    </div>     
                    <!-- fin row interne du form -->   

                    <button type="submit" class="btn btn-small btn-info">Envoyer</button>
                    <!-- fin button envoyer -->                
                </form>
            </div>
            <!-- fin div form -->
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