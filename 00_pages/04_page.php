<?php

require_once '../inc/functions.php'; //APPEL DES FONCTIONS

// cette fonction get_defined_constantes() dans le print_r nous donne toutes les constantes à notre disposition

// avec <pre> on préserve l'affiche et on met on saut de ligne
echo "<pre>";
    print_r(get_defined_constants());
echo "</pre>";

?>