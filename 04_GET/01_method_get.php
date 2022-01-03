<?php
 require_once '../inc/functions.php'; // appel des fonctions
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- ====================================================== -->
    <!--              AJOUTER LE HEAD EN REQUIRE                --> 
    <!-- ====================================================== -->

    <!-- required my tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
    <title>Cours PHP - Chapitre 4- 01 $_GET</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="">
    <!-- ====================================================== -->
    <!-- en-tête :  HEADER A COMPLETER AVEC NAV EN REQUIRE      --> 
    <!-- ====================================================== -->
    
    <header class="container-fluid p-4">
        <div class="col-12 text-center text-info">
            <h1 class="display-4">Cours PHP - Chapitre 4 - 01 Methode GET</h1>
            <p class="lead">$_GET[ ] représente les données qui transitent par l'url</p>

            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
            <?php
                $varOla = "Olá !";
                echo "<p class=\"text-white\">$varOla tudo bem?</p>";
        
                whatDay();
            ?>
        </div>
    </header>
    <!-- fin container-fluid : header -->

    <div class="container mt-2 mb-2 p-2 m-auto">

        <section class="row">

            <div class="col-md-6">
                <h2>La méthode GET</h2>
                <ul>
                    <li>code>$_GET[ ]</code>est une superglobale, et un tableau (array) comme toutes les superglobales</li>
                    <li>Superglobabales signifie que cette variable est disponible partout dans le script, y compris au sein des fonctions</li>
                    <li>Les informations transitent selon une syntaxe précise dans l'url. Ex.: <span class="bg-primary text-white">mapage.php?indice1=valeur1&indiceN=valeurN</span></li>
                    <li>Plusieurs variables prédéfinies en PHP sont "superglobales", ce qui signifie qu'elles sont disponibles quel que soit le contexte du script. Il est inutile de faire global $variable; avant d'y accéder dans les fonctions ou les méthodes.</li>
                    <li>Les variables superglobales sont : <br>
                        <ol>
                            <li><code>$GLOBALS</code></li><br>
                            <li><code>$_SERVER</code></li><br>
                            <li><code>$_GET</code></li><br>
                            <li><code>$_POST</code></li><br>
                            <li><code>$_FILES </code></li><br>
                            <li><code>$_COOKIE</code></li><br>
                            <li><code>$_SESSION</code></li><br>
                            <li><code>$_REQUEST</code></li><br>
                            <li><code>$_ENV</code></li><br>
                    </li>
                        </ol>
                    </li>

                    <li>Quand on receptionne les données $_GET se remplit dans un array selon la syntaxe suivante (entre <code>""</code> ou <code>'</code><br>
                    <code>
                        $_GET = array <br>
                        'indice1' => 'valeur1', <br>
                        'indiceN' => 'valeurN' <br>
                        ); <br>
                    </code></li>

                    <li>Pour voir le tableau on fera d'abord un <code>var_dump(*_GET) : il faut donc le décommenter !</code></li>          
                <ul>         
            </div>            
            <!-- fin col -->
            
            <div class="col-md-6">
                <h2>Exemples (cliquer sur les liens qui établissent les informations des produits dans $_GET) :</h2>

                <p><a href="02_method_get.php?article=jean&couleur=bleu&prix=70">Cliquer ici pour voir le jean bleu à 70 euros</a></p>
                <!-- nom de la page ? indice1=valeur1 & indice2=valeur2 & indice3=valeur3 -->

                <p><a href="02_method_get.php?article=robe&couleur=rouge&prix=60">Cliquer ici pour voir la robe rouge à 60 euros</a></p>

                <p><a href="02_method_get.php?article=pull&couleur=blanc&prix=50">Cliquer ici pour voir le pull blanc à 50 euros</a></p>

                <p><a href="02_method_get.php?article=slip&couleur=vert&prix=20">Cliquer ici pour voir le slip vert à 20 euros</a></p>
            </div>
             <!-- fin col -->
        </section>
        <!-- fin row -->
        
        <div class="col">
         <p>Un paragraphe</p>
        </div>


    </div>
    <!-- fin div container -->

    <!-- ====================================================== -->
    <!--                  FOOTER EN REQUIRE                     --> 
    <!-- ====================================================== -->
    
    <footer>
    <!-- Ici on a l'includ pour synroniser le code du footer sur toutes les pages du dossier : -->
    <?php require_once '../inc/footer.inc.php'; ?>
    </footer>
    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>
</html>