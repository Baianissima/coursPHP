<!DOCTYPE html>
<?php
    #---------------------------------------------
    # Ceci est aussi un commentaire en PHP, avec dièse #
    #---------------------------------------------
    $variable1 = "La page faite avec des fichiers en inc";
    require_once '../inc/functons.php'; //APPEL DES FONCTIONS

?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo "<title>$variable1</title>" ?>

    <style>
        .bg-orange {
            background-color: orange;
        }

        .bg-blush {
            background-color: #9eb2c3;
        }
        
    </style>
    <!-- <link rel="stylesheet" href="../css/styles.css" -->
</head>


