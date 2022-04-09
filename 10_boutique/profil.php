
<?php 
// REQUIRE CONNEXION, SESSION, ETC
require_once 'inc/init.inc.php';

// debug($_SESSION);
// debug(estConnecte());
// debug(estAdmin());
// debug(RACINE_SITE);
// debug($_POST);

if (!estConnecte()) {  // Accès à la page autorisée quand on est connecté, si pas connecté, cet header renvoie à la page CONNEXION
    header('location:connexion.php');
}
?> 

<!DOCTYPE html>
<html lang="fr">
<!--  meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,600;1,400&family=Belgrano&display=swap" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>

    <!-- Bootstrap ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Mes styles -->
    <link rel="stylesheet" href="css/styles.css" >

    <title>Profil - page test envoyée lors de la connexion</title>
</head>

<body>
    <!-- ====================================================== -->
    <!--  EN-TETE : header à preceder de NAVBAR en require      --> 
    <!-- ====================================================== --> 
    
    <?php 
        require_once 'inc/navbar.inc.php';
    ?> 
  
    <header class="container-fluid f-header p-2 mb-4 bg-light">
        <div class="col-12 text-center">
            <h1 class="display-4">Votre Profil : connexion Membre et connexion Admin</h1>
            <p class="lead">Ici on voit afficher le résultat du IF pour les variables <code>client(0)</code> et <code>administrateur(1)</code><br>
            Les echos apparaîssent ici si le pseudo et le mdp sont corrects !</p>
            <!-- ce p a été mis dans la navbar en inc <p class="alert alert-success w-25 text-center">Bonjour, <?php echo $_SESSION['membre'] ['prenom'];?></p> -->

                <?php
                    if(estAdmin()) { // Si le membre est admin il n'a pas les mêmes accès qu'un 'client'
                        echo '<p class="lead alert alert-success">VOUS ÊTES ADMINISTRATEUR !</p>';
                    } else { 
                        echo '<p class="text-center alert alert-info">VOUS ETES CONNECTE.E, RDV AU CATALOGUE !</p>';
                    }
                ?>
            <!-- sousnav pour les accès back office : nav-pills -->
            <ul class="nav nav-pills nav-fill justify-content-ce">
                    <?php 
                        if(estAdmin()) { // si le membre est 'admin' il n'a pas les mêmes accès qu'un membre 'client'
                            echo '<li class="nav-item"><a class="btn btn-secondary" href="' .RACINE_SITE. 'admin/accueil.php">ESPACE ADMIN</a></li>';
                            echo '<li class="nav-item"><a class="btn btn-secondary" href="' .RACINE_SITE. 'accueil.php">ESPACE CATALOGUE</a></li>';
                            // echo 'coucou';
                        } else {
                            echo '<li class="nav-item"><a class="btn btn-secondary" href="accueil.php">RETOUR A L\'ACCUEIL</a></li>';
                        }
                        if (estConnecte()) {
                            //  echo 'Bienvenue !';
                            echo '<li class="nav-item"><a class="btn btn-secondary" href="' .RACINE_SITE. 'connexion.php?action=deconnexion">SE DECONNECTER</a></li>';
                        }
                    ?>
            </ul>
        </div>
    </header>
    <!-- fin container-fluid header -->

    <!-- ====================================================== -->
    <!--                CONTAINER : contenu principal           --> 
    <!-- ====================================================== -->


    <?php
        //4 TRAITEMENT DE MISE À JOUR D'UN MEMBRE
        if ( !empty($_POST) ) {//not empty
            // debug($_POST);
            $_POST['pseudo'] = htmlspecialchars($_POST['pseudo']);
            $_POST['nom'] = htmlspecialchars($_POST['nom']);// pour se prémunir des failles et des injections SQL
            $_POST['prenom'] = htmlspecialchars($_POST['prenom']);
            $_POST['email'] = htmlspecialchars($_POST['email']);
            $_POST['civilite'] = htmlspecialchars($_POST['civilite']);
            $_POST['adresse'] = htmlspecialchars($_POST['adresse']);
            $_POST['code_postal'] = htmlspecialchars($_POST['code_postal']);
            $_POST['ville'] = htmlspecialchars($_POST['ville']);

            $resultat = $pdoMAB->prepare( " UPDATE membres SET pseudo = :pseudo, nom = :nom, prenom = :prenom, email = :email, civilite = :civilite, adresse = :adresse, code_postal = :code_postal, ville = :ville, WHERE pseudo = :pseudo " );// requete préparée avec des marqueurs

            $resultat->execute( array(
                ':pseudo' => $_POST['pseudo'],
                ':nom' => $_POST['nom'],
                ':prenom' => $_POST['prenom'],
                ':email' => $_POST['email'],
                ':civilite' => $_POST['civilite'],
                ':adresse' => $_POST['adresse'],
                ':code_postal' => $_POST['code_postal'],    
                ':ville' => $_POST['ville'],
            ));
            header('location:accueil.php');
            exit();
        }

    ?>

    <main class="container p-2">

        <section class="row justify-content-center">
                <div class="col-8">
                    <!-- maj d'infos / d'un membre / d'un membre directement sur la BDD -->
                    <h2>Mise à jour des vos informations (membre) / UP DATE</h2>
                        <form method="POST" action="" class="shadow p-3 mb-5 bg-body rounded">
                            <div class="row">
                                <div class="col-4 form-group mt-2">
                                    <label for="pseudo">Votre pseudo *</label>
                                    <input type="text" name="pseudo" id="pseudo" value="<?php echo $_SESSION['membre']['pseudo']; ?>" class="form-control"> 
                                </div>
                            </div>
                            <!-- <div class="form-group mt-2">
                                <label for="mdp">Mot de passe *</label>
                                <input type="password" name="mdp" id="mdp" value="" class="form-control">
                                <small class="bg-warning">votre mot de passe doit contenir entre 4 et 20 caractères</small>
                            </div> -->
                            <div class="row">
                                <div class="col-4 form-group mt-2">
                                    <label for="nom">Nom *</label>
                                    <input type="text" name="nom" id="nom" value="<?php echo $_SESSION['membre']['nom']; ?>" class="form-control">
                                </div>
                            <div class="col-4 form-group mt-2">
                                <label for="prenom">Prénom *</label>
                                <input type="text" name="prenom" id="prenom" value="<?php echo $_SESSION['membre']['prenom']; ?>" class="form-control"> 
                            </div>
                                <div class="col-4 form-group mt-2">
                                    <label for="email">Email *</label>
                                    <input type="email" name="email" id="email" value="<?php echo $_SESSION['membre']['email']; ?>" class="form-control">
                                </div>
                            </div>
                            <!-- fin row  -->
                            <div class="row">
                                <div class="form-group mt-2">
                                    <label for="civilite">Civilité *</label>
                                    
                                    <input type="radio" name="civilite" value="m" checked> Homme
                                    <input type="radio" name="civilite" value="f"<?php if (isset($_SESSION['membre']['civilite']) && $_SESSION['membre']['civilite'] =='f') echo 'checked';?>> Femme            
                                </div>
                            <div class="col-4 form-group mt-2">
                                <label for="adresse">Adresse</label>
                                <textarea name="adresse" id="adresse" class="form-control"><?php echo $_SESSION['membre']['adresse']; ?></textarea>
                            </div>
                                <div class="col-4 form-group mt-2">
                                    <label for="code_postal">Code postal</label>
                                    <input type="text" name="code_postal" id="code_postal" value="<?php echo $_SESSION['membre']['code_postal']; ?>" class="form-control"> 
                                </div>
                            <div class="col-4 form-group mt-2">        
                                <label for="ville">Ville</label>
                                <input type="text" name="ville" id="ville" value="<?php echo $_SESSION['membre']['ville']; ?>" class="form-control"> 
                            </div>
                            <div class="form-group mt-2">
                                <input type="submit" value="Mise à jour" class="btn btn-md btn-outline-success"> 
                            </div>
                        </form>
                <!-- fin row form -->
            </div>
            <!-- fin col -->
        </section>
        <!-- fin row -->
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