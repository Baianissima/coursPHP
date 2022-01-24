<?php

// 1- FONCTION VAR DUMP avec styles boostrap : ma fonction var_dump est nomée "debug" :s

function debug($mavar) { // la fonction avec son paramètre, une variable
    echo "<br><small class=\"bg-info text-dark\"> * * * * * * * * * * * var_dump de la BDD maboutique * * * * * * * * * * * </smal><pre class=\"alert alert-info w-25\">";
    var_dump($mavar); // à cette variable on applique la fonction var_dump()
    echo "</pre>";

}

// FONCTIONS REQUETES PREPAREES


// FONCTION POUR VERIFIER QUE LE MEMBRE EST CONNECTE


// FONCTION POUR VERIFIER QUE LE MEMBRE EST ADMIN


?>