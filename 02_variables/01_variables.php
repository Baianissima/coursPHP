<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
    <title>Cours PHP - 01/Variables</title>

    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="bg-vieuxrose">
    <!-- =================================== -->
    <!-- en-tête -->
    <!-- =================================== -->
    
    <header class="container-fluid p-4 bg-grisclair">
        <div class="col-12 text-center">
            <h1 class="display-4">Cours PHP - Chapitre 02 - Variables</h1>
            <p class="lead">Les variables en PHP</p>

            <!-- ce code en 1 ligne sert à afficher le chemnin du fichier sur la page html -->
            <?php echo "<p>Exemple de constante en PHP >>> Chemin absolu du fichier en cours : " . __FILE__ . "</p>"; ?>
        </div>
    </header>

    <div class="container bg-white">

        <div class="row">
            <div class="col-md-6">
                <h2>Les variables</h2>
                <p>Chaque variable possède un identifiant particulier, qui commence toujours par le caractère dollar ($) suivi de la variable. Les règles de créa tion des noms de la variable sont les suivantes :</p>

                <ul>
                    <li>Le nom commence par un caractère alphabétique, pris dans les ensembles [a-z], [A-Z] ou par le tiret du bas </li>
                    <li>Les caractères suivants peuvent être les mêmes plus des chiffres.</li>
                    <li>La longueur du nom n’est pas limitée, mais il convient d’être raisonnable sous peine de confusion dans la saisie du code. Il est conseillé de créer des noms de variable le plus « parlant » possible. En relisant le code contenant la variable $nomclient, par exemple, vous comprenez davantage ce que vous manipulez que si vous aviez écrit $x ou $y.</li>
                </ul>
            </div>
        </div>
    </div>
  <!-- fin div container -->


  <!-- Commenter à l'intérieur du code PHP si on veut garder l'info que pour le côté serveur !  -->

  <?php require
    // Ici on appelle le footer cree dans dossier inc pour qu il se repete sur cette page : 
  '../inc/footer.inc.php'; ?>

<!-- ici on a l'includ pour synroniser le code du footer sur toutes les pages du dossier : -->
  <?php require_once '../inc/footer.inc.php'; ?>

    <!-- Optional JavaScript -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>
</html>