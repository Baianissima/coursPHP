<?php

// (REQUIRE CONNEXION, SESSION ETC)
require_once 'inc/init.inc.php';
// debug($_SESSION);
// debug(estConnecte);
// debug(estAdmin);
debug(RACINE_SITE);

if (!estConnecte()) {  // accès à la page autorisée quand on est admin (et pas connecté)
    header('location: ../connexion.php');
}

?>

<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,600;1,400&family=Belgrano&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Bootstrap ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Mes styles -->

    <link rel="stylesheet" href="styles.css" >

    <title>ACCUEIL ADMIN - dossier admin dans boutique</title>
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
            <h1 class="display-4">Accueil back office</h1>
            <p class="lead">Accueil du dossier Admin de la boutique</p>
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
            <div class="row">
                texte
            </div>
        </section>
    </main>
</body>
</html>