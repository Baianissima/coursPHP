<?php

// voir la doc https://www.php.net/manual/fr/function.setlocale.php

// ma première fonction en PHP
function minutePap() {
    echo "<p class=\"bg-success text-white w-100\"> Minute, papillon !</p>";
}

// 2nde fonction PHP : le jours de la semaine
function whatDay() {
    echo "<p>Nous sommes " . date('l') . " my friend !</p>";
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
    echo "<p>Nous sommes le " . utf8_encode( strftime('%A, %d %B, %Y')) . "</p>";

    
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





//   EXEMPLES (voir la doc https://www.php.net/manual/fr/function.setlocale.php ) :
//   Exemple #1 Exemple avec setlocale()

//   <?php
//   /* Configure le script en hollandais */
//   setlocale(LC_ALL, 'nl_NL');
  
//   /* Affiche : vrijdag 22 december 1978 */
//   echo strftime("%A %e %B %Y", mktime(0, 0, 0, 12, 22, 1978));
  
//   /* Essai de différentes valeurs possible pour l'allemand */
//   $loc_de = setlocale(LC_ALL, 'de_DE@euro', 'de_DE', 'de', 'ge');
//   echo "L'identifiant de l'allemand sur ce système est '$loc_de'";
//   ?>


?>