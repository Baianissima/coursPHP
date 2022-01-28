
<?php 
// REQUIRE CONNEXION, SESSION, ETC

//CONNEXION AU FICHIER INIT dans le dossier INC

require_once 'inc/init.inc.php';
// debug($_SESSION);


// des IF pour le traitement du formulaire
if (!empty($_POST) ) {
    
    debug($_POST);

    if ( !isset($_POST['civilite']) || $_POST['civilite'] != 'm' && $_POST['civilite'] != 'f') { //
        // !isset n'est pas isset, .=concatenation puis affeectation, || ou streln string length longueur chaine de caractère
        $contenu .= '<div class="alert alert-danger">Vérifier votre civilité !</div>';
    }

    if ( !isset($_POST['prenom']) || strlen($_POST['prenom']) < 2 || strlen($_POST['prenom']) > 20) {
        // !isset n'est pas isset, .=concatenation puis affeectation, || ou streln string length longueur chaine de caractère
        $contenu .= '<div class="alert alert-danger">Votre prénom doit faire entre 2 et 20 caractères</div>';
    }

    if ( !isset($_POST['nom']) || strlen($_POST['nom']) < 2 || strlen($_POST['nom']) > 20) {
        $contenu .= '<div class="alert alert-danger">Votre nom de famille doit faire entre 2 et 20 caractères</div>';
    }

    if ( !isset($_POST['pseudo']) || strlen($_POST['pseudo']) < 2 || strlen($_POST['pseudo']) > 20) {
        $contenu .= '<div class="alert alert-danger">Votre pseudo doit faire entre 4 et 20 caractères</div>';
   }

   if ( !isset($_POST['mdp']) || strlen($_POST['mdp']) < 2 || strlen($_POST['mdp']) > 50) {
    $contenu .= '<div class="alert alert-danger">Votre mot de passe doit faire entre 4 et 20 caractères</div>';
    }
    
    // email
    if ( !isset($_POST['email']) || strlen($_POST['email']) > 50 || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        // filter_var filtre é une variable, et dans ce filtre on passe la constante prédéfinie (EN MAJUCULE) qui vérifie que c'est bien au format email
        $contenu .= '<div class="alert alert-danger">Votre email n\'est pas conforme !</div>';
        }

   if ( !isset($_POST['adresse']) || strlen($_POST['adresse']) < 2 || strlen($_POST['adresse']) > 50) {
        $contenu .= '<div class="alert alert-danger">Votre adresse pas conforme !</div>';
   }   

   if ( !isset($_POST['code_postal']) || !preg_match('#^[0-9]{5}$#', $_POST['code_postal'])) {
    // !preg_match vérifie si la chaîne de caractère a le format autorisé
    $contenu .= '<div class="alert alert-danger">Le code postal n\'est pas valable !</div>';
    }

    if ( !isset($_POST['ville']) || strlen($_POST['ville']) < 2 || strlen($_POST['ville']) > 50) {
    $contenu .= '<div class="alert alert-danger">Votre ville doit faire entre 4 et 20 caractères</div>';
    }  

    // A COMPLETER A PARTIR D'ICI APRES LA PAUSE DEJEUNER :

    if (empty($contenu)) { // si la variable est vide c'est qu il n y a aucune erreur dans $_POST
        // Si la variable est vide c'est qu'il n'y a acune erreur dans $_POST
        $membre = executeRequete( " SELECT * FROM membres WHERE pseudo = :pseudo ",
                                    array(':pseudo' => $_POST['pseudo']));
        // Ici on compte le contenu de $membre
        if ($membre->rowCount() > 0) {
            $contenu .='<div class="alert alert danger">Le pseudo est indispensable veuillez en choisir un autre ! </div>';
        } else {
            $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT); // bcrypt

            $succes = executeRequete( " INSERT INTO membres (civilite, prenom, nom, email, pseudo, mdp, adresse, code_postal, ville, statut) VALUES (:civilite, :prenom, :nom, :email, :pseudo, :mdp, :adresse, :code_postal, :ville, 0) ",
            array(
                ':civilite' => $_POST['civilite'],
                ':prenom' => $_POST['prenom'],
                ':nom' => $_POST['nom'],
                ':email' => $_POST['email'],
                ':pseudo' => $_POST['pseudo'],
                ':mdp' => $mdp,
                ':adresse' => $_POST['adresse'],
                ':code_postal' => $_POST['code_postal'],
                ':ville' => $_POST['ville'],
            ));

            if ($succes) {
                $contenu .='<div class="alert alert-success">Vous êtes bien inscrit à La Boutique !</div>';
            } else {
                $contenu .='<div class="alert alert-danger">Erreur de l\'inscription ! Recommencez !</div>';
            }
        }
    }
}

?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,600;1,400&family=Belgrano&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Mes styles -->
    <link rel="stylesheet" href="css/styles.css" >

    <title>Connexion</title>
</head>

<body>

    <!-- ====================================================== -->
    <!--  EN-TETE : header à preceder de NAVBAR en require      --> 
    <!-- ====================================================== --> 
    
    <?php 
        require_once 'inc/navbar.inc.php';
    ?> 
  

    <header class="container-fluid f-header p-2 bg-white">
        <div class="col-12 text-center">
            <h1 class="display-4">Connectez-vous</h1>
            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
            <?php
                $positiva = "Tudo joia!";
                echo "<p class=\"text-dark\">$positiva</p>";
            ?>
        </div>
    </header>
    <!-- fin container-fluid header -->
    
    <!-- ====================================================== -->
    <!--                CONTAINER : contenu principal           --> 
    <!-- ====================================================== -->
    <main class="container bg-light p-2">
        <section class="row justify-content-center p-4">
        <?php echo $contenu ?>
            <form action="" method="POST" class="col-10 border alert-success p-4">
                <div class="mb-4">
                    <label for="civilite" class="form-label">Civilité *</label> <br>
                    <div class="row">
                        <div class="col-2">
                            <input type="radio" name="civilite" value="f" id="civilite" checked> Femme</input>
                        </div>
                        <div class="col-2">
                            <input type="radio" name="civilite" value="m" id="civilite" checked> Homme</input>
                        </div> 
                    </div>            
                </div>
                <!-- fin row -->

                <div class="row mb-4">
                    <div class="col-6">
                        <label for="prenom" class="form-label">Prénom *</label>
                        <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Votre prénom" ></input>
                    </div>

                    <div class="col-6">
                        <label for="nom" class="form-label">Nom *</label>
                        <input type="text" name="nom" id="nom" class="form-control" placeholder="Votre nom"></input>
                    </div>
                </div> 
                <!-- fin row -->

                <div class="mb-4">
                    <label for="email" class="form-label">Adresse e-mail *</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Votre e-mail"></input>
                </div>

                <div class="mb-4">
                    <label for="pseudo" class="form-label">Choisir un pseudo *</label>
                    <input type="text" name="pseudo" id="pseudo" class="form-control" placeholder="Votre pseudo"></input>
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">Mot de passe *</label>
                    <input type="password" name="mdp" id="mdp" class="form-control" placeholder="Votre mot de passe"></input>
                </div>

                <div class="mb-4">
                    <label for="adresse" class="form-label">Adresse *</label>
                    <!-- <input type="text" name="adresse" id="adresse" class="form-control" ></input> -->
                    <textarea name="adresse" id="adresse" cols="30" rows="5" class="form-control" placeholder="Votre adresse"></textarea>
                </div>

                <div class="mb-4">
                    <label for="code_postal" class="form-label">Code postal *</label>
                    <input type="text" name="code_postal" id="code_postal" class="form-control" placeholder="Votre code postal"></input>
                </div>

                <div class="mb-4">
                    <label for="ville" class="form-label">Ville *</label>
                    <input type="text" name="ville" id="ville" class="form-control" placeholder="Votre ville"></input>
                </div>

                <button type="submit" class="btn btn-success">Enregistrer</button>
            </form>
            <!-- fin row form1 -->
        </section>
        <!-- fin row -->

        <section>
            <div class="col-md-10 mx-auto m-4">
                <h2 class="Connectez-vous"><a>METTE LE LIEN DE LA PAGE DU FORM pour le LOGIN</a></h2>         
            </div>
            <!-- fin col -->
        </section
        ><!-- fin row -->

        <section>
            <div class="col-md-10 mx-auto m-4">
                <h2 class="m-4 p-4 text-center"></h2>         
            </div>
            <!-- fin col -->
        </section
        ><!-- fin row -->
    </main>
    <!-- fin container -->

    <!-- ====================================================== -->
    <!--                  FOOTER : en require                   --> 
    <!-- ====================================================== -->  
    
    <?php 
        require_once 'inc/footer.inc.php';
    ?> 

    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>
</html>