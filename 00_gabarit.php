<?php
 require_once '../inc/functions.php'; // appel des fonctions
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- ====================================================== -->
    <!--              AJOUTER LE HEAD EN REQUIRE              --> 
    <!-- ====================================================== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
    <title>TITRE DE LA PAGE POUR LE NAVIGATEUR</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="bg-light">
    <!-- ====================================================== -->
    <!-- en-tête :  HEADER A COMPLETER AVEC NAV EN REQUIRE      --> 
    <!-- ====================================================== -->
    
    <header class="container-fluid p-4 bg-dark">
        <div class="col-12 text-center text-info">
            <h1 class="display-4">TITRE NIVEAU 1</h1>
            <p class="lead">p class lead</p>
            <!-- passage PHP pour tester s il fonctionne avant de poursuivre -->
            <?php
                $varOla = "Olá !";
                echo "<p>$varOla tudo bem?</p>";
            ?>
        </div>
    </header>
    <!-- fin container-fluid header -->

    <div class="container justify-content-center bg-light">

        <section class="row m-4 p-4">

            <div class="col-md-6">

                <h2 class="alert-info">TITRE NIVEAU 2</h2>

                <p>PARAGRAPHE</p>
                <p>PARAGRAPHE</p>
                <p>PARAGRAPHE</p>
                <p>PARAGRAPHE</p>
                
                <!-- un passage PHP  -->
                
            </div>
            <!-- fin col -->

            <!-- div pour une UL < LI -->
            <div class="col-md-6">
                <h2 class="alert-info">TITRE NIVEAU 2</h2>
                <ul>
                    <li>1 LIGNE DE LA LI</li>
                    <li>1 LIGNE DE LA LI</li>
                    <li>1 LIGNE DE LA LI</li>
                    <li>1 LIGNE DE LA LI</li>

                    <!-- un passage PHP dans la UL -->
                       
                    </li>
				</ul>
            </div>
            <!-- fin col -->
        </section>
        <!-- fin section row -->


        <!-- section row pour un tableau -->
        <section class="row">
            <div class="col-8 justify-content-center">
                <h2 class="alert-info">TITRE NIVEAU 2</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Titre pour une colonne dans thead : une th</th>
                            <th scope="col">Titre pour une colonne dans thead : une th</th>
                        </tr>
                    </thead>

                    <tbody>
                    <!-- tr = des rows -->
                    <!-- th / td = des lignes -->
                        <tr>
                            <th scope="row"><code>Elements a mettre en évidence</code></th>
                            <td>Texte</td>
                        </tr>

                        <tr>
                            <th scope="row"><code>Elements a mettre en évidence</code></th>
                            <td>Texte</td>
                        </tr>
                    </tbody>             
                </table>
                <!-- fin tableau -->
            </div>
            <!-- fin col -->
        </section>
        <!-- fin row -->
    </div>
    <!-- fin div container -->

    <!-- ====================================================== -->
    <!--                  FOOTER EN REQUIRE                     --> 
    <!-- ====================================================== -->
    
    <!-- Ici on a l'includ pour synroniser le code du footer sur toutes les pages du dossier : -->
    <?php require_once '../inc/footer.inc.php'; ?>

    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>
</html>