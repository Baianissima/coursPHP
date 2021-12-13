
<!DOCTYPE html>
<?php 
    //déclaration d'une variable en PHP avec le symbole $ suivi du nom de la variable
    $variable1 = "cours PHP 7";
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> -->
        
    <?php echo "<title>Cours PHP - Suresnes 2021/2022</title>"; ?>

    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <?php
        //Affichage du contenu de la variable1 
        echo "<h1> Suresnes 2021 - $variable1 </h1>";
    ?>

    <hr>

    <p>Utilisation de variables en PHP et de passages PHP dans mon fichier HTML; on travaille aussi avec :
        <?php
            $variable2 = "MySQL";
            echo $variable2;
            echo "</p><hr>";
            // Le caractère de concaténation en PHP est le "." (le point) --- gettype est la fonction --- $variable1 et $variable2 sont des variables
            echo "<p>La variable2 est de type : ". gettype($variable2) . ".</p>";

            $variable2 = "Minute papillon !";
            echo "<p> $variable2 </p>";
            $variable2 = "Coucou !";
        ?>

        <hr>

        <?= //passage PHP plus court
        "<blockquote> $variable2 $variable2 On entend le $variable2 ! </blockquote>";
        ?>

        <hr>
        <h2>print_r()</h2>
        <h3>La liste des variables "globales" fournies avec PHP (toujours en majuscules !):</h3>
        <p>print_r() affiche toutes les variables à notre disposition</p>
        <!-- la balise <pre> preserve le format et améliroe la lisibilté du code -->
        <pre><?php print_r($GLOBALS); ?><pre>

        <hr>
        <p>Le contenu de la variable $_COOKIE</p>
        <?php print_r($_COOKIE); ?>

        <hr>
        <p>Le contenu de la variable $_ENV</p>
        <?php print_r($_ENV); ?>

        <hr>
        <p>Cette variable $SERVER['SERVER_SOFTWARE'] nous donne des informations sur le serveur</p>
        <?php print_r($_SERVER['SERVER_SOFTWARE']); ?>
</body>
</html>