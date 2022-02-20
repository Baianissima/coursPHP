<?php

// 1- FONCTION VAR DUMP AVEC STYLES BOOTSTRAP : ma fonction var_dump est nomée "debug" :
function debug($mavar) { // la fonction avec son paramètre, une variable
    echo "<br><small class=\"bg-danger text-white\"> * * * * * * * *  var_dump de la BDD universite * * * * * * * *  </smal><pre class=\"alert alert-info w-25\">";
    var_dump($mavar); // à cette variable on applique la fonction var_dump()
    echo "</pre>";
}

?>