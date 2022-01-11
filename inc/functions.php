<?php

// voir la doc https://www.php.net/manual/fr/function.setlocale.php

// ma première fonction en PHP
function minutePap() {
    echo "<p class=\"bg-success text-white w-100\"> Minute, papillon !</p>";
}

// 2nde fonction PHP : le jours de la semaine
function whatDay() {
    echo "<p class=\"text-white\">It's " . date('l') . ", my brother !</p>";
}

// test perso avec une fonction galabru ;-)
function galabru() {
    echo "<p>Que veut dire Galabru, " . "Vanusa ?</p>";
}

// fonction jour de la semaine
function jourSemaine() {
    echo "<p>Hoje é " . date('l, z') . "° dia do ano" . " my friend ! </p>";
}


// fonction jours passés à l annee
// 1)
function joursPasses() {
    echo "<p>Aujourd'hui c'est " . date('d/m/Y, l, z') . "° dia do ano" . " my friend ! </p>";
}

// 2) code d'Imram
function whatDays(){
    echo "<p>We are on<span class=\"fw-bold\"> ". date('d/m/Y, l, h:m')."</span> and we have already passed : <span class=\" bg-dark fw-bold\">" .date('z'). "</span> days of 2021</p>";
  }

// faire une fonction qui affiche la date au complet


// Dans une fonction afficher la date au complet avec strftime :

//1) function dateFR en trio : Sleyter, Vanusa, Bicson(Séma)
function dateFR() {
    // ou setlocale(LC_ALL, 'fr_fr');
    // ma contribution trouvée sur le doc http://www.finalclap.com/faq/81-php-afficher-date-heure-francais : setlocale(LC_TIME, 'fra_fra')
    setlocale(LC_TIME, 'fra_fra');
    echo "<p>Nous sommes le " . utf8_encode( strftime('%A, %e %B, %Y')) . "</p>";

    
    // ou concatener avec 3 echos :
    // setlocale(LC_TIME, 'fra_fra');
    // echo "<p>Nous sommes le " ;
    // echo "</p>";

}

//2) function d'Imram
function dateJour(){
    setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
    echo "<p>Date et Jour :<span class=\"fw-bold\"> ". strftime('%A %e/ %m /%Y')."</p>";
}

function date_fr() {
    setlocale(LC_TIME, 'fra_fra');
    echo"<p>Date et Jour :<span class=\"fw-bold\"> ". utf8_encode( strftime('%A, %d, %B, %Y'))."</p>";
}

// function date_eng()
// setlocale(LC_ALL, 'fr_FR.utf8, 'fra');
// echo strftime("%A %e %B %Y");
// echo ' - ';
// date_default_timezone_set("Europe/Paris");
// echo date('H:i:s');


// déclaration d'une constante qui contient une url ATTENTION on le déplace plus tard VOIR

// define("validator", "https://validator.w3.org/");


// CREATION D'UNE FONCTION POUR print_r
function jeprint_r($mavar) {
    echo "<pre>";
    print_r($mavar);
    echo "</pre>";
}

// CREATION D'UNE FONCTION POUR var_dump (la var debug doit être vu seulement par le développeur, il faut mettre en commentaire avant de lancer le site au client !!!) avec des styles bootstrap : on crée une étiquette jaune pour le titre var_dump dans les styles

function debug($mavar2) {
    echo "<br><small class=\"bg-warning text-danger\">Ici on fait afficher une var_dump !</small><pre class=\"alert alert-success\">";
    var_dump($mavar2); // à cette variable on applique la fonction var_dump()
    echo "</pre>";
}
?>