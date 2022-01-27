<?php

// 1- FONCTION VAR DUMP AVEC STYLES BOOTSTRAP : ma fonction var_dump est nomée "debug" :
function debug($mavar) { // la fonction avec son paramètre, une variable
    echo "<br><small class=\"bg-info text-dark\"> * * * * * * * * * * * var_dump de la BDD maboutique * * * * * * * * * * * </smal><pre class=\"alert alert-info w-25\">";
    var_dump($mavar); // à cette variable on applique la fonction var_dump()
    echo "</pre>";

}

// 2 - FONCTIONS POUR EXECUTER LES REQUETES PREPAREES AVEV FOREACH (raccourci comme un require)
function executeRequete( $requete, $parametres = array ()) { // utile pour toutes les requetes 1) la requete  2) fabrication du tableau avec des marqueurs
    foreach ($parametres as $indice => $valeur) { // boucle foreach
        $parametres[$indice] = htmlspecialchars($valeur); // boucle foreach // pour eviter les inections ???
        global $pdoMAB; // "global" nous permet d'acceder à la variable $pdoMAB dans l'espace global du fichier init.inc.php

        $resultat = $pdoMAB->prepare($requete); // prépare requête
        $succes = $resultat->execute($parametres); // et ici exécute

        if ($succes === false) {
            return false; // si la requête n'a pas marché, je renvoie "false"
        } else {
            return $resultat; // sinon je renvoie les résultats de la requête
        } // fin if else
    } // fin foreach
} // fin fonction


// 3 - FONCTION POUR VERIFIER QUE LE MEMBRE EST CONNECTE
function estConnecte() {
    if (isset($_SESSION['membre'])) {
        return true;
    } else {
        return false;
    }
}

// 4 - FONCTION POUR VERIFIER QUE LE MEMBRE EST ADMIN
function estAdmin() {
    if (estConnecte() && $_SESSION['membre']['statut'] == 1 ) {
        return true;
    } else {
        return false;
    }
}

?>