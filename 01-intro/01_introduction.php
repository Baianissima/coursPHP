<!-- Démarrage PHP : repos coursPHP sur OS (C:) -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
    <title>Cours PHP - Suresnes 2021/2022</title>

    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <!-- =================================== -->
    <!-- en-tête -->
    <!-- =================================== -->
    
    <header class="container-fluid p-4 bg-grisclair">
        <div class="col-12 text-center">
            <h1 class="display-4">Cours PHP - Introduction</h1>
            <p class="lead">PHP : Php Hyper-text Preprocessor</p>
        </div>
    </header>

    <div>
        <section class="row m-2 p-2">
            <div class="col-md-4 border border-warning">
                <h4>1/ Réaliser un site dynamique</h4>
                <p>Pour réaliser un site dynamique nous allons aborder les points suivants :</p>
                    <ul>
                        <li>La syntaxe et les caractéristiques du langage PHP (v7)</li>
                        <li>Les notions essentielles du langage SQL permettant la gestion d'une BDD et la réalisation des requêstes de base</li>
                        <li>... et les moyens d'yaccèder à l'aide de fonctions spécialisées de PHP (ou d'objet)/li>
                    </ul>
            </div>
            <!-- fin col -->

            <div class="col-md-4 p-1 border border-warning">
                <h4>2/ Qu'est-ce que PHP</h4>
            </div>
            <!-- fin col -->

            <div class="col-md-4 p-1 border border-warning">
                <h4>3/ Rappel sur les BDD</h4>
            </div>
            <!-- fin col -->
        </section>
        <!-- fin row -->
    </div>
    <!-- fin div container -->

    
    <!-- =================================== -->
    <!-- pied de page -->
    <!-- =================================== -->
    
        <!-- Ajouter "container" if you want to extend the Footer to full width/ou container-fluid -->
    <div class="my-5">

        <footer class="text-center text-lg-start bg-jaune">
            <!-- <div class="container d-flex justify-content-center py-5">
                <button type="button" class="btn-lg btn-floating mx-2" style="background-color: #54456b;">
                <i class="fab fa-facebook-f"></i>
                </button>
    
                <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
                <i class="fab fa-youtube"></i>
                </button>
    
                <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
                <i class="fab fa-instagram"></i>
                </button>
    
                <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
                <i class="fab fa-twitter"></i>
                </button>
            </div> -->

            <!-- Copyright -->
            <div class="text-center text-dark p-5 m-5" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2021 :
                <a class="text-dark" href="https://mdbootstrap.com/">Vanusa Santos, Colombbus</a>
            </div>
            <!-- Copyright -->     
        </footer>    
  </div>
  <!-- fin div container/fluid du footer -->

    <!-- Optional JavaScript -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>
</html>