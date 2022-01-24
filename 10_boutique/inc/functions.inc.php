<?php

// 1- FONCTION VAR DUMP AVEC STYLES BOOTSTRAP : ma fonction var_dump est nomée "debug" :
function debug($mavar) { // la fonction avec son paramètre, une variable
    echo "<br><small class=\"bg-info text-dark\"> * * * * * * * * * * * var_dump de la BDD maboutique * * * * * * * * * * * </smal><pre class=\"alert alert-info w-25\">";
    var_dump($mavar); // à cette variable on applique la fonction var_dump()
    echo "</pre>";

}

// 2 - FONCTIONS POUR EXECUTER LES REQUETES PREPAREES (raccourci comme un require la requete preparee)
function executeRequete( $requete, $parametres = array ()) {
    foreach ($parametres as $indice => $valeur) {
        $parametres[$indice] = htmlspecialchars($valeur);
        global $pdoMAB;

        $resultat = $pdoMAB->prepare($requete);
        $succes = $resultat->execute($parametres);

        if ($succes === false) {
            return false;    
        } else {
            return $resultat;
        } // fin if else
    } // fin foreach
} // fin fonction


// 3 - FONCTION POUR VERIFIER QUE LE MEMBRE EST CONNECTE


// 4 - FONCTION POUR VERIFIER QUE LE MEMBRE EST ADMIN


?>