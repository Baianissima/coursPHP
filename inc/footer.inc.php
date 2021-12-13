<footer>
    <!-- Ici on demande à PHP d'afficher l'heure au format français -->
    <div class="container bg-orange">
        <p>
        <?php 
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
