
<footer class="">
<!-- <footer id="sticky-footer" class="fixed-bottom"> -->
    <!-- Ici on demande à PHP d'afficher l'heure au format français -->

    <div class="container-fluid p-4 m-4 m-auto text-center">
       
        <!-- ce code avec 1 constante en PHP en 1 ligne sert à afficher le chemin du fichier sur la page html -->
        <?php
            echo "<p class=\"text-center\">Exemple de constante en PHP : chemin absolu du fichier en cours --> " . __FILE__ . "</p>";
        ?>
        
        <div>
            <small>Copyright &copy; Site My Boutique - BDD maboutique<br>
                Cours PHP, Colombbus 2021-2022</small>
        </div>
    </div>
</footer>


<!-- plus d'infos sur la fonction des heures :
https://www.php.net/manual/fr/function.date.php

https://www.php.net/manual/fr/timezones.europe.php
-->
