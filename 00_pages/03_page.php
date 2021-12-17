<?php
require_once '../inc/functons.php'; //APPEL DES FONCTIONS


    echo "<h1>Page avec des constantes</h1>";
// vérifier cela sur la casse TRUE et FALSE : A VOIR !
    define("PI", 3.1415926535);

    echo "le nombre PI vaut " . PI . "<br>";

    // if pour vérififer l'existence de la constante PI
    if (defined("PI")) echo "la constante PI est bien définie";

    echo "<hr>";

    define("validator", "https://validator.w3.org/");

    // vérification de l'existence de la constante dans un IF SI c'est vrai fait l'echo
    if (defined("validator")) echo "la constante validator est bien définie";
    echo "<hr>";
    echo "L'url du Validator du w3c est : " . validator . "<br>";

    // Ici on met la constante qui contient le https du site Valdiator :
    echo "Validez votre HTML CSS sur le site du <a href=\"" .validator. "\" target=\"_blanck\"> Validator </a>";

    echo "<hr>";

  require_once '../inc/functons.php'; //APPEL DES FONCTIONS


?>