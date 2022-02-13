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
            <p class="lead">Cours-2 : formulaire</p>
        </div>
    </header>
    <!-- fin container-fluid header -->
    <body>
        <div class="container text-center alert alert-warning w-25 p-4">
            <form action='cours_POO_formulaire.php' method='post' class="m-4">
                <label for='nom' class="p-4">Nom d'utilisateur : </label>
                <input type='text' name='nom' id='nom' class="p-2"><br>
                <label for='pass' class="p-4">Choisissez un mot de passe :</label>
                <input type='password' name='pass' id='pass' class="p-2 mb-4"><br>
                <input type='submit' value='Envoyer' class="btn btn-primary p-2">
            </form>
        </div>

        <?php
        if (!empty($_POST)) {
            require 'classes/utilisateur.class.php';

            require 'classes/membre.class.php';
            
            //+ Vérification des données reçues (regex + filtres)
            //+ Stockage des données (base de données)

            $pierre = new Utilisateur($_POST['pseudo'], $_POST['mdp']);
            echo $pierre->getNom(). '<br>';
        }
        ?>

    </body>
</html>