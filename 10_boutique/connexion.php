
<?php 
// REQUIRE CONNEXION, SESSION, ETC

//CONNEXION AU FICHIER INIT dans le dossier INC
require_once 'inc/init.inc.php';
// debug($_SESSION);

// 2 - DECONNEXION DU MEMBRE


// 3 - REDIRECTION VERS LA PAGE PROFIL


// 1 - TRAITEMENT DU FORMULAIREDE CONNEXION

// debug($_POST);

if ( !empty($_POST) ) {
    if ( empty($_POST['pseudo'])) { // si c'est vide = 0 ou NULL c'est false
        $contenu .='<div class="alert alert-warning">Le pseudo est requis !</div>';
    }

    if (empty($_POST['mdp'])) { //
        $contenu .='<div class="alert alert-warning">Le mot de passe est requis !</div>';
    }

    if (empty($contenu)) { //
        $resultat = executeRequete( " SELECT * FROM membres WHERE pseudo = :pseudo ",
                array(
                ':pseudo' => $_POST['pseudo'],
                // ':mdp' => $_POST['mdp'],
                ));

        if ( $resultat->rowCount() == 1 ) {   //
            $membre = $resultat->fetch( PDO::FETCH_ASSOC );
            debug($membre);

            // ce IF pour la vérification du mdp
            if ( password_verify($_POST['mdp'], $membre['mdp'])) {
                echo 'Coucou, cher membre !';
                $_SESSION['membre'] = $membre;

                // debug($_SESSION);

                header( 'location:profil.php' );
                exit();
            } else {
                $contenu .='<div class="alert alert-danger">Erreur sr les identifiants !</div>';
            }
        } else {
            $contenu .='<div class="alert alert-danger">Erreur sr les identifiants !</div>';
        } // fin if $resultat

    } // fin empty $contenu

} // fin verification formulaire

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

    <title>La boutique - Connectez-vous</title>
</head>

<body>

    <!-- ====================================================== -->
    <!--  EN-TETE : header à preceder de NAVBAR en require      --> 
    <!-- ====================================================== -->
  
    <header class="container-fluid f-header p-2 mb-4 bg-light">
        <div class="col-12 text-center">
            <h1 class="display-4">CONNEXION A VOTRE ESPACE PERSONNEL</h1>
            <p class="lead">( Rentrez vos identifiants)</p>
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
            <form action="" method="POST" class="col-4 border alert-info p-4">
                
                    <div class="mb-4">
                        <label for="pseudo" class="form-label">Pseudo*</label>
                        <input type="text" name="pseudo" id="pseudo" class="form-control" placeholder="Votre pseudo" ></input>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">Mot de passe *</label>
                        <input type="password" name="mdp" id="mdp" class="form-control" placeholder="Votre mot de passe"></input>
                    </div>

                    <label>
                        <input type="checkbox" value="remember-me" class="m-4">Se ouvenir de moi ;-)
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
    <footer>
        <!-- Ici on a l'includ pour synroniser le code du footer sur toutes les pages du dossier : -->
        <!-- passage php avec : require_once 'inc/footer.inc.php'; -->
        
    </footer>

    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>
</html>