
<?php 
// APPEL DES FONCTIONS
//CONNEXION AU FICHIER INIT dans le dossier INC

require_once 'inc/init.inc.php';

require_once 'inc/navbar.inc.php';
// debug testé : ma var_dump apparait ;-)
// debug($_mavar);
?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Mes styles -->
    <link rel="stylesheet" href="styles.css" >

    <title>Creer un compte</title>
</head>

<body>

    <!-- ====================================================== -->
    <!--  EN-TETE : header à preceder de NAVBAR en require      --> 
    <!-- ====================================================== -->
    <header class="container-fluid f-header p-2 bg-white">
        <div class="col-12 text-center">
            <h1 class="display-4">Creez votre compte</h1>
            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
            <?php
                $positiva = "Tudo joia!";
                echo "<p class=\"text-dark\">$positiva</p>";
            ?>
        </div>
    </header>
    <!-- fin container-fluid header -->
    
    <!-- ====================================================== -->
    <!--                CONTAINER : contenu principal           --> 
    <!-- ====================================================== -->
    <main class="container mx-auto m-4 p-4 text-center bg-light">
        <section class="row m-4">
            <form action="" method="POST" class="border border-succes p-1">
                <div class="mb-4">
                    <label for="type" class="form-label">Civilité</label> <br>
                    <div class="row">
                        <div class="col-2">
                            <input type="radio" name="vente" value="vente" id="type" checked> Femme</input>
                        </div>
                        <div class="col-2">
                            <input type="radio" name="location" value="location" id="type" checked> Homme</input>
                        </div> 
                    </div>            
                </div>
                <!-- fin row -->

                <div class="mb-4">
                    <label for="title" class="form-label">Prénom</label>
                    <input type="text" name="title" id="title" class="form-control" required></input>
                </div>

                <div class="mb-4">
                    <label for="description" class="form-label">Nom</label>
                    <input type="text" name="description" id="description" class="form-control" required></input>
                </div>

                <div class="mb-4">
                    <label for="code_postal" class="form-label">Adresse e-mail</label>
                    <input type="number" name="code_postal" id="zip_code" class="form-control" required></input>
                </div>

                <div class="mb-4">
                    <label for="ville" class="form-label">Mot de passe</label>
                    <input type="text" name="ville" id="city" class="form-control" required></input>
                </div>

                <button type="submit" class="btn btn-success">Enregistrer</button>
                </form>
                <!-- fin row form1 -->
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
        <?php 
            require_once 'inc/footer.inc.php'; 
        ?>
    </footer>

    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>
</html>