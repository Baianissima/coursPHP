
<?php 
// REQUIRE CONNEXION, SESSION, ETC
require_once 'inc/init.inc.php';

// debug($_SESSION);
// debug(estConnecte());
// debug(estAdmin());

// debug($_POST);

if (!estConnecte()) {  // accès à la page autorisée quand on est connecté, si pas connecté, cet header renvoie à la page CONNEXION
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
            <h1>PAGE PROFIL</h1>
            <h3>Ici on voi afficher le résultat du IF pour les variables adminstrateur(1) et client(0) </h3>
            <h4>Les echos apparaîssent ici si le pseudo et le mdp sont corrects !</h4>
            <p class="alert alert-danger w-25">Bonjour, <?php echo $_SESSION['membre'] ['prenom'];?></p>

                <?php
                    // $positiva = "Tudo joia!";
                    // echo "<p class=\"text-dark\">$positiva</p>";
                ?>
        </div> 
    </header>
    <!-- fin container-fluid header -->

    <?php
        if(estAdmin()) {
            echo '<p class="alert alert-danger w-25">Vous êtes admistrateur !</p>';
            echo '<a class="btn btn-primary" href="admin/index.php>Espace Admin</a>';
        } else {
            echo '<p class="alert alert-danger w-25">Vous êtes connecté.e au la Boutique !</p>';
            echo '<a class="btn btn-succes" href="accueil.php>Retour à la boutique</a>';
        }
        if (estConnecte()) {

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

        <div class="col-md-4 mx-auto m-4">
            <p class="alert alert-success border-success text-center"><a href="inscription.php">Aller sur la page INSCRIPTION</a>
            </p>   
        </div>

        <div class="col-md-4 mx-auto m-4">
            <p class="alert alert-success border-success text-center"><a href="connexion.php">Aller sur la page CONNEXION</a>
            </p>         
        </div>
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