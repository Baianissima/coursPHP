<?php 

// 1 APPEL DES FONCTIONS
require_once 'inc/functions.php';  



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

    <title>Formulaire de connexion</title>
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
            <h1 class="display-4">Formulaire de connexion</h1>
            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
            <?php
                $positiva = "Tudo joia?";
                echo "<p class=\"text-info\">$positiva</p>";
            ?>
        </div>
    </header>
    <!-- fin container-fluid header -->
    
    <!-- ====================================================== -->
    <!--                CONTAINER : contenu principal           --> 
    <!-- ====================================================== -->
    <main class="container p-2">
        <section class="row justify-content-center p-4">

        <?php echo $contenu ?>

            <form action="" method="POST" class="col-6 border alert-light p-4">
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
                    <label for="email" class="form-label">Adresse e-mail *</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Votre e-mail" required></input>
                </div>

                <div class="mb-4">
                    <label for="pseudo" class="form-label">Choisir un pseudo *</label>
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

                <button type="submit" class="btn btn-info">Enregistrer</button>
            </form>
            <!-- fin row form1 -->
        </section>
        <!-- fin row -->

        <section>
            <div class="col-md-4 mx-auto m-4">
                <p class="alert alert-light border-info text-center"><a href="connexion.php">Connexion à votre espace étudiant</a></p>         
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
