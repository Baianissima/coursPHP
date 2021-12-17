<footer>
    <!-- Ici on demande à PHP d'afficher l'heure au format français -->
    <div class="container bg-warning text-white">

 <!-- ce code avec 1 constante en PHP en 1 ligne sert à afficher le chemin du fichier sur la page html -->
    <?php echo "<p>Exemple de constante en PHP >>> Chemin absolu du fichier en cours : " . __FILE__ . "</p>"; ?>
        
        <p>
        <?php 

require_once '../inc/functons.php'; //APPEL DES FONCTIONS
            setlocale(LC_ALL, 'fr_FR');
            echo strftime("%A %e %B %Y");
            echo ' - ';
            date_default_timezone_set("Europe/Paris");
            echo date('H:i:s');
        ?>
        </p>
    </div>
</footer>

<!-- plus d'infos sur la fonction des heures :
https://www.php.net/manual/fr/function.date.php

https://www.php.net/manual/fr/timezones.europe.php
-->
