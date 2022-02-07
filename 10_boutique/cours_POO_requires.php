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

    <title><title>Repo PHP_POO</title></title>
</head>

<body>

    <!-- ====================================================== -->
    <!--  EN-TETE : header à preceder de NAVBAR en require      --> 
    <!-- ====================================================== --> 
    
    <header class="container-fluid f-header p-2 mb-4 bg-light">
        <div class="col-12 text-center">
            <h1 class="display-4">PHP POO - PROGRAMMATION ORIENTÉE OBJET</h1>
            <p class="lead">Fichier principal avec les requires des classes <code>admin</code> et <code>utilisateur</code></p>
        </div>
    </header>
    <!-- fin container-fluid header -->
    <main>
        <section class="row p-2 mb-4">
            <div class="col-10">
                <?php
                    require 'classes/utilisateur.class.php';
                    require 'classes/admin.class.php';
                    // require 'classes/membre.class.php';
                    
                    $pierre = new Admin('Pierre', 'abcdef', 'Sud');
                    $mathilde = new Admin('Math', 123456, 'Nord');
                    $florian = new Utilisateur('Flo', 'flotri', 'Est');
                    
                    $pierre->setPrixAbo();
                    $mathilde->setPrixAbo();
                    $florian->setPrixAbo();
                    
                    $u = 'Utilisateur';
                    echo 'Valeur de ABONNEMENT dans Utilisateur : ' .$u::ABONNEMENT. '<br>';
                    echo 'Valeur de ABONNEMENT dans Admin : ' .Admin::ABONNEMENT. '<br>';
                    
                    echo 'Prix de l\'abonnement pour ';
                    $pierre->getNom();
                    echo ' : ';
                    $pierre->getPrixAbo();
                    echo '<br>Prix de l\'abonnement pour ';
                    $mathilde->getNom();
                    echo ' : ';
                    $mathilde->getPrixAbo();
                    echo '<br>Prix de l\'abonnement pour ';
                    $florian->getNom();
                    echo ' : ';
                    $florian->getPrixAbo();
                ?>
            </div>
        </section>
    </main>
</body>
</html>