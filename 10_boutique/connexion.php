
<?php 
// POUR SE CONNECTER ET SE DECONNECTER :

// (CONNEXION AU FICHIER INIT dans le dossier INC)
require_once 'inc/init.inc.php';
// debug($_SESSION);

// 2 - DECONNEXION DU MEMBRE
// debug($_GET);
$message = '';
if (isset($_GET['action']) && $_GET['action'] == 'deconnexion') { // Si il existe action qui contient déconnexion dans l'URL
    unset($_SESSION['membre']); // On supprime le membre de la session (le contenu du tableau indice ['membre'])
    $message = '<div class="alert alert-success text-center">Vous êtes bien déconnecté !</div>'; // Message de déconnexion cf echo plus bas
    // debug($_SESSION);
}

// 3 - REDIRECTION VERS LA PAGE PROFIL
if (estConnecte()) { // si le membre est connecté on le renvoie vers le profil
    header ('location:profil.php'); // header() est une fonction prédéfinie qui va rediriger vers la page souhaitée (ici profil.php)
    exit();
}


// 1 - TRAITEMENT DU FORMULAIRE DE CONNEXION

// debug($_POST);

if ( !empty($_POST) ) {

    // Une autre option ici : reassembler les 2 if :
    

    if ( empty($_POST['pseudo'])) { // si c'est vide = 0 ou NULL c'est false
        $contenu .='<div class="alert alert-warning">Le pseudo est requis !</div>';
    }

    if (empty($_POST['mdp'])) { // si mdp est vide
        $contenu .='<div class="alert alert-warning">Le mot de passe est requis !</div>';
    }

    if (empty($contenu)) { // si la variable $contenu est vide, pas d'erreurs
        $resultat = executeRequete( " SELECT * FROM membres WHERE pseudo = :pseudo ", // on cherche ummembre avec son pseudo unique
                array(
                ':pseudo' => $_POST['pseudo'],
                // ':mdp' => $_POST['mdp'],
                ));

        if ( $resultat->rowCount() == 1 ) {   // si il y a une ligne ce'est qu'il a ce pseudo et ce membre
            $membre = $resultat->fetch( PDO::FETCH_ASSOC );
            debug($membre);

            // ce IF pour la vérification du mdp
            if ( password_verify($_POST['mdp'], $membre['mdp'])) { // si le hash du mdp de la bdd correspond au mdp tapé dans le formulaire, alors password_verify retourne TRUE
                // echo 'Coucou, cher membre !';
                $_SESSION['membre'] = $membre; // nous créons une session avec les infos du membre, dans un tableau multidimensionnel
                // debug($_SESSION);
                header( 'location:profil.php' ); // on redirige le membre vers la page profil
                exit();
            } else {
                $contenu .='<div class="alert alert-danger">Erreur sr les identifiants !</div>';
            }
        } else {
            $contenu .='<div class="alert alert-danger">Erreur sr les identifiants !</div>';
        } // fin if $resultat

    } // fin empty $contenu

} // fin vérification formulaire

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

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>

    <!-- Bootstrap ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Mes styles -->
    <link rel="stylesheet" href="css/styles.css" >

    <title>La boutique - Connectez-vous</title>
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
            <h1 class="display-4">Connectez-vous</h1>
            <p class="lead">Rentrez vos identifiants !</p>
            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
                <?php
                    // $positiva = "Tudo joia!";
                    // echo "<p class=\"text-dark\">$positiva</p>";
                ?>
        </div>
    </header>
    <!-- fin container-fluid header -->
    
    <!-- ====================================================== -->
    <!--                CONTAINER : contenu principal           --> 
    <!-- ====================================================== -->
    <main class="container p-2">
        <section class="row justify-content-center p-4">
        <?php echo $contenu; ?>
        <?php echo $message; ?>
            <form action="" method="POST" class="col-4 border alert-info p-4" style="color: rgba(132, 113, 122, 0.8);">
                
                    <div class="mb-4">
                        <label for="pseudo" class="form-label">Pseudo*</label>
                        <input type="text" name="pseudo" id="pseudo" class="form-control" placeholder="Votre pseudo" ></input>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">Mot de passe *</label>
                        <input type="password" name="mdp" id="mdp" class="form-control" placeholder="Votre mot de passe"></input>
                    </div>

                    <label>
                        <input type="checkbox" value="remember-me" class="m-4">Se souvenir de moi ;-)
                    </label>

                    <div class="mb-4">
                        <button class="btn btn-lg btn-primary btn-block m-4" type="submit">Connectez-vous</button>
                    </div>
            </form>
            <!-- fin row form1 -->
        </section>
        <!-- fin row -->

        <section>
            <div class="col-md-4 mx-auto m-4">
                <p class="alert alert-success border-success text-center"><a href="inscription.php">Pas encore membre ? Inscrivez-vous !</a></p>    
                     
                <!-- <button type="button" class="btn btn-sm btn-outline-secondary"><a href="inscription.php">Ajouter au panier</button> -->

            </div>
            <!-- fin col -->
        </section>
        <!-- fin row -->

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