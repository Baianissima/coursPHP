
<?php 
// REQUIRE CONNEXION, SESSION, ETC

//CONNEXION AU FICHIER INIT dans le dossier INC
require_once 'inc/init.inc.php';
debug($_SESSION);
debug(estConnecte());
debug(estAdmin());

// debug($_POST);

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

    <title>Profil - page test envoyée lors de la connexion</title>
</head>

<body>
<!-- ====================================================== -->
    <!--  EN-TETE : header à preceder de NAVBAR en require      --> 
    <!-- ====================================================== -->
  
    <header class="container-fluid f-header p-2 mb-4 bg-light">
        <div class="col-12 text-center">
            <h1>Sur cette page Profil : l'eco apparaît si le pseudo et le mdp sont corrects !</h1>
            <p class="alert alert-danger w-25">Bonjour, <?php echo $_SESSION['membre'] ['prenom'];?></p>

                <?php
                    // $positiva = "Tudo joia!";
                    // echo "<p class=\"text-dark\">$positiva</p>";
                ?>
        </div>

        <div class="col-md-4 mx-auto m-4">
            <p class="alert alert-success border-success text-center"><a href="inscription.php">Aller sur la page INSCRIPTION</a>
            </p>   
        </div>

        <div class="col-md-4 mx-auto m-4">
            <p class="alert alert-success border-success text-center"><a href="connexion.php">Aller sur la page CONNEXION</a>
            </p>         
        </div>
        
    </header>
    <!-- fin container-fluid header -->

    <?php
        if(estAdmin()) {
            echo '<p class="alert alert-danger w-25">Vous êtes admistrateur</p>';
        } else {
            echo '<p class="alert alert-danger w-25">Vous êtes connecté.e ! Rendez-vous à la Boutique !</p>';
        }
    ?>

    <!-- ====================================================== -->
    <!--                CONTAINER : contenu principal           --> 
    <!-- ====================================================== -->
    <main class="container p-2">
        <section class="row justify-content-center p-4">
        <div class="col-md-10 mx-auto m-4">
                <h2 class="m-4 p-4 text-center"></h2>         
            </div>
            <!-- fin col -->    
        </section>
        <!-- fin row -->
    </main>
    <!-- fin container -->
    
</body>
</html>