
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
            <h1 class="display-4">Votre Profil</h1>
            <p class="lead">Ici on voit afficher le résultat du IF pour les variables <code>client(0)</code> et <code>administrateur(1)</code><br>
            Les echos apparaîssent ici si le pseudo et le mdp sont corrects !</p>
            <!-- ce p a été mis dans la navbar en inc <p class="alert alert-success w-25 text-center">Bonjour, <?php echo $_SESSION['membre'] ['prenom'];?></p> -->

                <?php
                    if(estAdmin()) { // Si le membre est admin il n'a pas les mêmes accès qu'un 'client'
                        echo '<p class="lead">Vous êtes administrateur</p>';
                    } else { 
                        echo '<p class="text-center">Vous êtes connecté.e, rendez-vous à la Boutique !</p>';
                    }
                ?>
        </div> 
    </header>
    <!-- fin container-fluid header -->


    <!-- ====================================================== -->
    <!--                CONTAINER : contenu principal           --> 
    <!-- ====================================================== -->
    <main class="container p-2">
        <section class="row justify-content-center p-4">
                    <div>
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Espace Admin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Aller à la boutique</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Se déconnecter</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link disabled">Ecrire une autre chose ?</a>
                            </li> -->
                        </ul>
                    </div>
            </section>
            <!-- fin row -->

        <section class="row justify-content-center p-4">
            <div class="col-md-8">
                <h2 class="m-4 p-4 text-center"></h2>
                <?php
                    if(estAdmin()) { // Si le membre est admin il n'a pas les mêmes accès qu'un 'client'
                        echo '<a class="btn btn-primary text-center" href="' .RACINE_SITE. 'admin/accueil_admin.php">Espace Admin</a>';
                        echo '<a class="btn btn-success text-center" href="' .RACINE_SITE. 'accueil.php">Aller à la boutique</a>';
                    } else { 
                        echo '<a class="btn btn-success text-center" href="accueil.php">Retour à la boutique</a>';
                    }
                    if (estConnecte()) {
                        // echo 'OLA!';
                        echo '<a class="btn btn-secondary text-center" href="connexion.php?action=deconnexion">Se déconnecter</a>';
                }
                ?>

                <p class="lead">EXO :</p>
                <ul>
                    <li>Faire un form pour afficher en PHP...(utiliser le form de l'inscription)</li>
                    <li>Utiliser $_SESSIONS</li>
                    <li>Utiliser indice ['membre']</li>
                    <li>UPDATE du membre</li>
                </ul>      
            </div>
            <!-- fin col -->    
        </section>
        <!-- fin row -->

        <section class="row justify-content-center">
                
                <div class="col-6">
                    <h2>Mise à jour d'un membre
                <?php
                    // if (!empty($_SESSION)) {  // not empty
                    //     // debug($_SESSION);

                    //     $_POST['membre'] = htmlspecialchars($_POST['membre']);
                    //     // pour se prémunir des failles et des injections SQL
                        
                    //     $_POST['id_membre'] = htmlspecialchars($_POST['id_membre']);
                    //     $_POST['pseudo'] = htmlspecialchars($_POST['pseudo']);
                    //     $_POST['mdp'] = htmlspecialchars($_POST['mdp']);
                    //     $_POST['prenom'] = htmlspecialchars($_POST['prenom']);
                    //     $_POST['email'] = htmlspecialchars($_POST['email']);
                    //     $_POST['civilite'] = htmlspecialchars($_POST['civilite']);
                    //     $_POST['ville'] = htmlspecialchars($_POST['ville']);
                    //     $_POST['code_postal'] = htmlspecialchars($_POST['code_postal']);
                    //     $_POST['adresse'] = htmlspecialchars($_POST['adresse']);
                    //     $_POST['statut'] = htmlspecialchars($_POST['statut']);

                    //     $resultat = $pdoMAB->prepare( " UPDATE membre SET pseudo = :pseudo, mdp = :mdp, prenom = :prenom, email = :email, civilite = :civilite, ville = :ville, code_postal = :code_postal, adresse = :adresse, statut = :statut WHERE id_membre = :id_membre " ); 
                    //     // requête préparée avec des marqueurs

                    //     $resultat->execute( array(
                    //         ':pseudo' => $_POST['pseudo'],
                    //         ':mdp' => $_POST['mdp'],
                    //         ':prenom' => $_POST['prenom'],
                    //         ':email' => $_POST['email'],
                    //         ':civilite' => $_POST['civilite'],
                    //         ':ville' => $_POST['ville'],
                    //         ':code_postal' => $_GET['code_postal'],
                    //         ':adresse' => $_GET['adresse'],
                    //         ':statut' => $_GET['statut'],
                    //     ));

                    //     header ('location:profil.php');
                    //     exit();
                    // }
                    ?>
                </div>

                <div class="col-6">
                <h2>Mise à jour des vos informations (membre)</h2>
                    <form action="" method="POST" class="border border-secondary p-4">
                        <div class="mb-4">
                            <label for="civilite" class="form-label">Civilité *</label> <br>
                            <div class="row">
                                <div class="col-2">
                                    <input type="radio" name="civilite" value="m" id="civilite" checked> Homme</input>
                                </div>
                                <div class="col-2">
                                    <input type="radio" name="civilite" value="f" id="civilite" checked> Femme</input>
                                </div>
                            </div>            
                        </div>
                        <!-- fin row -->

                        <div class="row mb-4">
                            <div class="col-6">
                                <label for="prenom" class="form-label">Prénom *</label>
                                <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Votre prénom" required></input>
                            </div>

                            <div class="col-6">
                                <label for="nom" class="form-label">Nom *</label>
                                <input type="text" name="nom" id="nom" class="form-control" placeholder="Votre nom" required></input>
                            </div>
                        </div> 
                        <!-- fin row -->

                        <div class="mb-4">
                            <label for="email" class="form-label">E-mail *</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Votre e-mail" required></input>
                        </div>

                        <div class="mb-4">
                            <label for="pseudo" class="form-label">Pseudo *</label>
                            <input type="text" name="pseudo" id="pseudo" class="form-control" placeholder="Votre pseudo" required></input>
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label">Mot de passe *</label>
                            <input type="password" name="mdp" id="mdp" class="form-control" placeholder="Votre mot de passe" required></input>
                        </div>

                        <div class="mb-4">
                            <label for="adresse" class="form-label">Adresse *</label>
                            <!-- <input type="text" name="adresse" id="adresse" class="form-control" ></input> -->
                            <textarea name="adresse" id="adresse" cols="30" rows="5" class="form-control" placeholder="Votre adresse" required></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="code_postal" class="form-label">Code postal *</label>
                            <input type="text" name="code_postal" id="code_postal" class="form-control" placeholder="Votre code postal" required></input>
                        </div>

                        <div class="mb-4">
                            <label for="ville" class="form-label">Ville *</label>
                            <input type="text" name="ville" id="ville" class="form-control" placeholder="Votre ville" required></input>
                        </div>

                        <button type="submit" class="btn btn-primary">Mis à jour</button>
                    </form>
            <!-- fin row form -->
                </div>
        </section>
        <!-- fin row -->

        <!-- <div class="col-md-4 mx-auto m-4">
            <p class="alert alert-success border-success text-center"><a href="inscription.php">Aller sur la page INSCRIPTION</a>
            </p>   
        </div> -->

        <!-- <div class="col-md-4 mx-auto m-4">
            <p class="alert alert-success border-success text-center"><a href="connexion.php">Aller sur la page CONNEXION</a>
            </p>         
        </div> -->
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