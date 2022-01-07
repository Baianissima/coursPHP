<?php
    require_once '../inc/functions.php'; //APPEL DES FONCTIONS
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- ====================================================== -->
    <!--              A AJOUTER LE HEAD EN REQUIRE              --> 
    <!-- ====================================================== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
    <title>Cours PHP - 03 Chaînes de caracteres</title>

    <!-- mes styles -->
    <!-- <link rel="stylesheet" href="../css/styles.css"> -->

    <link rel="stylesheet" href="../css/styles.css">
    
</head>

<body class="bg-light">
    <!-- ====================================================== -->
    <!-- en-tête :  HEADER A COMPLETER AVEC NAV EN REQUIRE      --> 
    <!-- ====================================================== -->
    
    <nav>
        <?php require_once '../inc/navbar.inc.php'; ?>
    </nav>
    
    <header class="container-fluid p-4">
        <div class="col-12 text-center text-info">
            <h1 class="display-4">PHP</h1>
            <p class="lead">Les variables / 03 Chaînes de caracteres</p>
            <?php
                $varOla = "Olá !";
                echo "<p class=\"text-white\">$varOla tudo bem?</p>";
        
                // whatDay();
            ?>
        </div>
    </header>
    <!-- fin container-fluid header -->

    <div class="container justify-content-center">

        <section class="row m-4 p-4">

            <div class="col-md-6">

                <h2 class="alert-info">1 - Les chaînes de caractères</h2>

                <p>Les chaînes de caractères sont avec les nombres les types de données les plus manipulés sur un site web. </p>
                
                <p>De surcroît, dans les échanges entre le client et le serveur au moyen de formulaires, toutes les données sont transmises sous forme de chaînes, d’où leur importance.</p>

                <p>Une chaîne de caractères est une suite de caractères alphanumériques contenus entre des guillemets simples (apostrophes) ou doubles.</p>

                <p>Si une chaîne contient une variable, celle-ci est évaluée, et sa valeur incorporée à la chaîne uniquement si vous utilisez des guillemets et non des apostrophes</p>
                <?php
                    $var1 = 569874;
                    echo '<p>le contenu de $var1<br>';
                    echo "le contenu de \$var1 : $var1</p>";
                ?>      
            </div>
            <!-- fin col -->

            <div class="col-md-6">
                <h2 class="alert-info">Quelques caractères</h2>
                <ul>
                    <li>$a = 'PHP';</li>
                    <li>$b = 'MySQL';</li>
                    <li>$c = "PHP et $b";//affiche : PHP et MySQL</li>
                    <li>$d = 'PHP et $b'; //affiche PHP et $b car $ et b sont considérés comme des caractères sans signification particulière</li>
                    <li>
                        <?php
                            $devise = "La devise de la République est \"Liberté, Egalité, Fraternité\"";
                            echo $devise;
                        ?>
                    </li>
				</ul>
            </div>
            <!-- fin col -->
        </section>
        <!-- fin section row -->

        <section class="row">
            <div class="col-8 justify-content-center">
            <h2 class="alert-info">Un tableau avec des raccourcis utiles :</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Séquence</th>
                        <th scope="col">Signification</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><code>\'</code></th>
                        <td>Affiche une apostrophe.</td>
                    </tr>
                    <tr>
                        <th scope="row"><code>\"</code></th>
                        <td>Affiche des guillemets.</td>
                    </tr>
                    <tr>
                        <th scope="row"><code>\$</code></th>
                        <td>Affiche le signe $.</td>
                    </tr>
                    <tr>
                        <th scope="row"><code>\\</code></th>
                        <td>Affiche un antislash.</td>
                    </tr>
                    <tr>
                        <th scope="row"><code>\n</code></th>
                        <td>Nouvelle ligne (code ASCII 0x0A).</td>
                    </tr>
                    <tr>
                        <th scope="row"><code>\r</code></th>
                        <td>Retour chariot (code ASCII 0x0D).</td>
                    </tr>
                    <tr>
                        <th scope="row"><code>\t</code></th>
                        <td>Tabulation horizontale (code ASCII 0x09).</td>
                    </tr>
                    <tr>
                    <th scope="row"><code>\[0-7] {1,3}</code></th>
								<td>Séquence de caractères désignant un nombre octal (de 1 à 3 caractères 0 à 7) et affichant le caractère correspondant :
								echo "\115\171\123\121\114"; //Affiche MySQL<br>
									<?php echo "<div class=\"alert alert-success\">\115\171\123\121\114</div>"; ?> </td>
                    </tr>
                    <tr>
                    <th scope="row"><code>\x[0-9 A-F a-f] {1,2}</code></th>
								<td>Séquence de caractères désignant un nombre hexadécimal (de 1 à 2 caractères 0 à 9 et A à F ou a à f) et affichant le caractère correspondant :<br>
								echo "\x4D\x79\x53\x51\x4C"; // Affiche MySQL
								<br>
									<?php echo "<div class=\"alert alert-success\">\x4D\x79\x53\x51\x4C</div>"; ?> </td>
                    </tr>
                </tbody>             
            </table>
            <!-- fin tableau -->
            </div>
        </section>
        <!-- fin row -->

        <section class="row">
            <div class="col-md-12">
                <h2 class="alert-info">Concaténer des chaînes de caractères</h2>
                <p>L'opérateur PHP de concaténation est le point (.), qui fusionne deux chaînes littérales ou contenues dans des variables en une seule chaîne. Exemples :</p>         
            </div>

            <div class="col-6 m-4 p-4 alert alert-success">
            <h5>Voici le code utilisé pour faire afficher les phrases ci-dessous (mettre les phrases entre des <code><p></code> sur le HTML) :</h5>
                <code>
                // $langage1 = "PHP"; <br>
                // $langage2 = "MySQL"; <br>
                // $phrase1 = "a) Utilisez " .$langage1. " et " .$langage2. " pour faire un site dynamique."; <br>
                // echo $phrase1; <br>
                // $phrase2 = "b) Utilisez $langage1 et $langage2 pour faire un site dynamique."; <br>
                // echo $phrase2; <br>
                // echo "c) Utilisez $langage1 et $langage2 pour faire un site dynamique."; <br>
                // echo "d) Utilisez ",$langage1," et ",$langage2, " pour construire un site dynamique"; <br>
                // Lors de l’affichage avec l’instruction echo, cette concaténation peut être simulée en séparant chaque chaîne ou variable par une virgule. <br>
                // echo "<strong>ON CONCATENE AVEC UN (.) un point c'est tout !</strong>"; </code>
            </div>
            <!-- fin col -->         

            <div  class="col-5 m-4 p-4 alert alert-success">
                <h5>Et ici on voit ce code PHP exécuté :</h5>
                <?php
                // Commenter à l'intérieur du code PHP si on veut garder l'info que pour le côté serveur !
                $langage1 = "PHP";
                $langage2 = "MySQL";
                $phrase1 = "<p>a/ Utilisez " .$langage1. " et " .$langage2. " pour faire un site dynamique.</p>";
                echo $phrase1;
                $phrase2 = "<p>a2/ Utilisez $langage1 et $langage2 pour faire un site dynamique.</p>";
                echo $phrase2;
                echo "<p>b/ Utilisez $langage1 et $langage2 pour faire un site dynamique.</p>";
                // echo "<p>c/ Utilisez ",$langage1," et ",$langage2, " pour construire un site dynamique</p>";
                // Lors de l’affichage avec l’instruction echo, cette concaténation peut être simulée en séparant chaque chaîne ou variable par une virgule.
                echo "<strong>ON CONCATENE AVEC UN (.) un point c'est tout !</strong>";
                ?>
            </div>
            <!-- fin col -->              
        </section>
        <!-- fin row -->
    </div>
    <!-- fin div container -->

    <!-- ====================================================== -->
    <!--                  FOOTER EN REQUIRE                     --> 
    <!-- ====================================================== -->
    <footer>
        <!-- Ici on a l'includ pour synroniser le code du footer sur toutes les pages du dossier : -->
        <?php require_once '../inc/footer.inc.php'; ?>
    </footer>

    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>
</html>