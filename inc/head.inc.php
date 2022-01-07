<!DOCTYPE html>
<?php
    #--------------------------------------------------#
    # Ceci est aussi un commentaire en PHP, avec dièse #
    #--------------------------------------------------#
    $variable1 = "La page faite avec des fichiers en inc";
    require_once '../inc/functions.php'; //APPEL DES FONCTIONS
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo "<title>$variable1</title>" ?>

    <!-- mes typos google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,300&family=Shizuru&display=swap" rel="stylesheet">

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/styles.css">
</head>
</html


