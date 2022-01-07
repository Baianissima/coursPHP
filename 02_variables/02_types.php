<?php
 require_once '../inc/functions.php'; //APPEL DES FONCTIONS
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
    <title>Cours PHP - 02 Types de données </title>
    <!-- mes styles -->
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
            <p class="lead">Les variables en PHP / 02 Types de données</p>
            <?php
            minutePap();
            ?>
        </div>
    </header>
    <!-- fin container-fluid header -->

    <div class="container">

        <section class="row m-4 p-4">
            
            
            <div class="col-md-6">
                <h2 class="alert-info">Les variables</h2>

                <p>Chaque variable possède un identifiant particulier, qui commence toujours par le caractère dollar <code>($)</code> suivi de la variable. Les règles de créa tion des noms de la variable sont les suivantes :</p>

                <ul>
                    <li>Les types de base :</li>
                        <ul>
                            <li>Entiers, avec le type integer, qui permet de représenter les nombres entiers dans les bases 10, 8 et 16.</li>
                            <li>Flottants, avec le type double ou float, au choix, qui représentent les nombres réels, ou plutôt décimaux au sens mathématique. </li>
                            <li>Chaînes de caractères, avec le type string.</li>
                            <li>Booléens, avec le type boolean, qui contient les valeurs de vérité TRUE ou FALSE (soit les valeurs 1 ou 0 si on veut les afficher).</li>
                        </ul>
                    <li>Les types composés :</li> 
                        <ul>
                            <li>Tableaux, avec le type array, qui peut contenir plusieurs valeurs.</li>
                            <li>Objets, avec le type object.</li>
                        </ul>
                        <li>Les types spéciaux</li>
                        <ul>
                            <li>Objets, avec le type object.</li>
                            <li>Type null.</li>
                        </ul>
				</ul>
            </div>
            <!-- fin col -->

            <div class="col-sm-12 col-md-6">
                <h2 class="alert-info">Les opérateurs numériques</h2>
                <p>PHP offre un large éventail d’opérateurs utilisables avec des nombres. Les variables ou les nombres sur lesquels agissent ces opérateurs sont appelés les opérandes.</p>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Opérateur</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><code>+</code></th>
                            <td>Addition</td>
                        </tr>

                        <tr>
                            <th scope="row"><code>-</code></th>
                            <td>Soustraction</td>
                        </tr>

                        <tr>
                            <th scope="row"><code>*</code></th>
                            <td>Multiplication</td>
                        </tr>

                        <tr>
                            <th scope="row"><code>**</code></th>
                            <td>Puissance (associatif à droite)<br>
                            $a=3;<br>
                            echo $a**2; //Affiche 9<br>
                            cho $a**2**4; //Affiche 43046721 soit 3**(2**4) ou 316</td>
                        </tr>

                        <tr>
                            <th scope="row"><code>/</code></th>
                            <td>Division</td>
                        </tr>

                        <tr>
                            <th scope="row"><code>%<code></th>
                            <td>Modulo : nous donne le reste de la division euclidienne <br>
                            <?php
                                $var = 159;
                                echo "<pre>" .gettype($var). "</pre>";
                                // pour afficher le symbole $ il faut l'échapper avec \
                                echo "<div class=\"alert alert-success\">Le contenu de <code>\$var</code> est $var<br>";
                                // pour faire une opération avec une variable
                                echo "Le modulo de $var / 7 ou <code>\$var%7</code> est égal à " .$var%7;
                                echo "</div>";
                            ?>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row"><code>--</code></th>
                            <td>Décrémentation : soustrait une unité à la variable. Il existe deux possibilités, la prédécrémentation, qui soustrait avant d’utiliser la variable, et la postdécrémentation, qui soustrait après avoir utilisé la variable.<br>
                        <code>
                        $var=56;<br>
                        echo $var--; //affiche 56 puis décrémente $var.<br>
                        echo $var; //affiche 55.<br>
                        echo --$var; //décrémente $var puis affiche 54.
                        </code>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><code>++</code></th>
                        <td>Incrémentation : ajoute une unité à la variable. Il existe deux possibilités, la préincrémentation, qui ajoute 1 avant d’utiliser la variable, et la postincrémentation, qui ajoute 1 après avoir utilisé la variable.
                        <code>$var=56;<br>
                        echo $var++; //affiche 56 puis incrémente $var : postincrémenté<br>
                        echo $var; //affiche 57.<br>
                        echo ++$var; //incrémente $var puis affiche 58 : préincrémenté
                        </code>

                        <?php
                            $var = 56;
                            echo "<div class=\"alert alert-danger\">";
                            echo "L'exemple : " .$var++. " devient APRES incrémentation $var";
                            echo "</div>";

                            echo "<div class=\"alert alert-warning\">";
                            echo "L'exemple : " .++$var. " \$var est incrémenté AVANT avec ++\$var";
                            echo "</div>";

                            // echo "<div class=\"alert alert-warning\">";
                            // echo "Coucou";
                            // echo "</div>";
                        ?>
                        </td>
                    </tr>
                </table>
                <!-- fin tableau -->
            </div>
            <!-- fin col -->
        </section>
        <!-- fin row -->

        <section class="row">
            <div class="display-4 col-md-6">
                <h2 class="alert-info"">Le type "boolean" ou boléen</p>
                <p>Le type "boolean peut contenir deux valeurs : TRUE ou FALSE ou bien 1 ou 0</p>
                    <?php
                    $a = 100;
                    $b = ($a < 150);
                    // dan le cas où c'est FALSE il affichera une chaîne vide
                    echo $b;
                    echo "<div class=\"alert alert-primary\">Si je ne vois pas le contenu de \$b =  >>>>> $b <<<< c'est que c'est faux.";
                    ?>

                <h3>Les opérateurs boléens</h3>

                    <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Opérateurs</th>
                        <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">OR</th>
                            <td>Teste si l’un au moins des opérandes a la valeur TRUE :<br>
                                $a = true;<br>
                                $b = false;<br>
                                $c = false;<br>
                                $d = ($a OR $b);//$d vaut TRUE.<br>
                                $e = ($b OR $c); //$e vaut FALSE.</td>
                        </tr>
                        <tr>
                            <th scope="row">||</th>
                            <td>Équivaut à l’opérateur OR mais n’a pas la même priorité.</td>
                        </tr>
                        <tr>
                            <th scope="row">XOR</th>
                            <td>Teste si un et un seul des opérandes a la valeur TRUE :<br>
                            $a = true;<br>
                            $b = true;<br>
                            $c = false;<br>
                            $d = ($a XOR $b); //$d vaut FALSE.<br>
                            $e = ($b XOR $c); //$e vaut TRUE.</td>
                        </tr>
                        <tr>
                        <th scope="row">AND</th>
                            <td>Teste si les deux opérandes valent TRUE en même temps :<br>
                            $a = true;<br>
                            $b = true;<br>
                            $c = false;<br>
                            $d = ($a AND $b); //$d vaut TRUE.<br>
                            $e = ($b AND $c); //$e vaut FALSE.</td>
                        </tr>
                        <tr>
                            <th scope="row">&&</th>
                            <td>Équivaut à l’opérateur AND mais n’a pas la même priorité.</td>
                        </tr>
                        <tr>
                            <th scope="row">!</th>
                            <td>Opérateur unaire de négation, qui inverse la valeur de l’opérande :
                            $a = TRUE;<br>
                            $b = FALSE;<br>
                            $d = !$a; //$d vaut FALSE.<br>
                            $e = !$b; //$e vaut TRUE.</td>
                        </tr>
                    </tbody>
                    </table>
                    <p>Attention !! Une erreur classique dans l’écriture des expressions conditionnelles consiste à confondre l’opérateur de comparaison == avec l’opérateur d'affectation =. L’usage des parenthèses dans la rédaction des expressions booléennes est souvent indispensable et toujours recommandé pour éviter les problèmes liés à l’ordre d’évaluation des opérateurs.</p>
                </h3>
            </div>
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