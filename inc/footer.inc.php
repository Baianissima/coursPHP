<footer>
    <!-- Ici on demande à PHP d'afficher l'heure au format français -->
    <div class="container-fluid p-4 m-4 m-auto text-center">

    <hr>

        <!-- ce code avec 1 constante en PHP en 1 ligne sert à afficher le chemin du fichier sur la page html -->
        <?php
            echo "<p class=\"text-center\">Exemple de constante en PHP : chemin absolu du fichier en cours --> " . __FILE__ . "</p>";

            echo '<p>';
            require_once '../inc/functions.php'; //appel des fonctions
                setlocale(LC_TIME, 'fra_fra');
                echo"<p>". utf8_encode( strftime('%A, %d %B %Y'));
                echo ' - ';
                date_default_timezone_set("Europe/Paris");
                echo date('H : i : s');
            echo '</p>';
        ?>     
    </div>
</footer>

<!-- plus d'infos sur la fonction des heures :
https://www.php.net/manual/fr/function.date.php

https://www.php.net/manual/fr/timezones.europe.php
-->
