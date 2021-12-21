<?php
 require_once '../inc/functions.php'; // appel des fonctions
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- ====================================================== -->
    <!--              AJOUTER LE HEAD EN REQUIRE                --> 
    <!-- ====================================================== -->

    <!-- required my tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
    <title>Cours PHP - 03 Contiditons</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="bg-light">
    <!-- ====================================================== -->
    <!-- en-tête :  HEADER A COMPLETER AVEC NAV EN REQUIRE      --> 
    <!-- ====================================================== -->
    
    <header class="container-fluid p-4 bg-dark">
        <div class="col-12 text-center text-info">
            <h1 class="display-4">Cours PHP - 03 Conditions</h1>
            <p class="lead">Les instructions conditionnelles ou les conditions : indispensables à la gestion du déroulement d'un algorythme quelconque, <br>
            ces instructions sont présentes dans tous les langages. Cela sera familier pour ceux qui ont déjà pratiqué un langage tel que le JavaScript.</p>
            <!-- passage PHP pour tester s'il fonctionne avant de poursuivre -->
            <?php
                $varOla = "Olá !";
                echo "<p>$varOla tudo bem?</p>";

                whatDay();
            ?>
        </div>
    </header>
    <!-- fin container-fluid : header -->

    <div class="container justify-content-center bg-light">

        <section class="row mt-4 p-2">

            <div class="col-md-4">

                <h2 class="alert-info text-center">"If"</h2>

                <p>L'instruction <code>if</code> est la plus simples et la plus utilisée des instructions conditionnelles. Elle est essentielle en ce qu'elle permet d'orienter l'exécution du script en fonction de la valeur booléenne d'une expression.</br>

                <code>
                $a = 100; <br>
                $b = 55; <br>
                $c = 25; <br>

                if ($a > $b && $b > $c) { <br>
                    echo "&lt;p class=\"alert alert-success w-75 mx-auto text-center\">Les deux conditions sont vraies&lt;/p>"; <br>                   
                    } <br>
                </code>
                
                <!-- un passage PHP  -->
                <?php
                $a = 100;
                $b = 55;
                $c = 25;

                if ($a > $b && $b > $c) {
                    echo "<p class=\"alert alert-success w-75 mx-auto text-center\">Les deux conditions sont vraies</p>";                    
                    }
                ?>          
            </div>
            <!-- fin col -->

            <div class="col-md-4 ">
                <h2 class="alert-info text-center">"if... else"</h2>
                <p>L'instruction <code>if... else</code> permet de traiter le cas où l'expression est vraie et en même temps de prévoir un traitement de rechange quand elle est fausse/FALSE.
                <code> <br>
                    $e = 10; <br>
                    $f = 5; <br>
                    $g = 2; <br>

                    echo "&lt;p class=\"alert alert-danger w-75 mx-auto text-center\">";<br>            
                    if ($e == 9 || // OR OU //  $f > $g) { <br>
                        echo "Au moins une des 2 conditions est remplie ou vraie &lt;/p>"; <br>
                    } else { <br>
                        echo "Les 2 conditions sont fausses &lt;/p>"; <br>
                    } <br>
                </code>
                </p>
                
                <!-- un passage PHP -->
                <?php
                    echo "<p class=\"alert alert-warning w-75 mx-auto text-center\">";             
                    if ($a < $b) {
                        echo "$a est supérieur à $b</p>";
                    } else {
                        echo "$a est inférieur à $b</p>";
                    }
                    // echo "</p>";

                    // autre exemple
                    $e = 10;
                    $f = 5;
                    $g = 2;

                    echo "<p class=\"alert alert-danger w-75 mx-auto text-center\">"; // OR OU //             
                    if ($e == 9 || $f > $g) {
                        echo "Au moins une des 2 conditions est remplie ou vraie</p>";
                    } else {
                        echo "Les 2 conditions sont fausses</p>";
                    }  
                ?>
            </div>
            <!-- fin col -->

            <div class="col-md-4">

                <h2 class="alert-info text-center">"if... else" en ternaire</h2>

                <p>Il existe une autre manière d'écrire un if... else : la condition "ternaire"</p>
                <p>Dans la ternaire le "?" remplace le "if" et le ":" remplace le else</p>
                <code>
                    $h = 10; <br>

                    if ($h == 10) { <br>
                        echo "&lt;p class=\"small\">$h est égal à 10&lt;/p>";<br>
                    } else {<br>
                        echo "&lt;p class=\"small\"$h est différent de 10&lt;/p>";<br>
                    }<br>

                    // la même condition en ternaire<br>
                    // ? = of<br>
                    // : = else<br>
                    // On vérifie une condition et si c'est vrai, on affiche la première expression sinon la seconde<br>
                    echo ( $h == 10 ) ? "&lt;p class=\"text-danger\">$h est égal à 10&lt;/p>" : "&lt;p class=\"text-danger\">$h est différent de 10&lt;/p>";<br>
                </code>

                <?php
                    $h = 10;

                    if ($h == 10) {
                        echo "<p class=\"small\">$h est égal à 10</p>";
                    } else {
                        echo "<p class=\"small\"$h est différent de 10</p>";
                    }

                    // la même condition en ternaire
                    // ? = of
                    // : = else
                    // On vérifie une condition et si c'est vrai, on affiche la première expression sinon la seconde
                    echo ( $h == 10 ) ? "<p class=\"alert alert-warning\">$h est égal à 10</p>" : "<p class=\"text-danger\">$h est différent de 10</p>";
                ?>
            </div>
            <!-- fin col -->
        </section>
        <!-- fin section row --> 

        <section class="row mt-4 p-2">
            <div class="col-md-6">
                <h2 class="alert-info text-center">"If... else if... else"</h2>
                <p>Une syntaxe plus complexe : <br>

                <code><br>
                echo "&lt;p class=\"alert alert-primary w-75 mx-auto text-center\">";<br>
                $d = 8;<br>
                if ( $d == 8) {<br>
                    echo "\$d qui contient $d est égal à 8&lt;/p>"; <br>
                } elseif ( $d != 10) {<br>
                    echo "\$d qui contient $d est différent de 10&lt;/p>"; <br>
                } else {
                    echo "les deux conditions sont fausses&lt;/p>";<br>
                }<br>
                </code>
                </p>

                <?php
                echo "<p class=\"alert alert-primary w-75 mx-auto text-center\">";
                $d = 8;
                if ( $d == 8 ) {
                    echo "\$d qui contient $d est égal à 8</p>"; // $d = 8
                } else if ( $d != 10 ) {
                    echo "\$d qui contient $d est différent de 10</p>"; // $d = autre chose que 10
                } else {
                    echo "les deux conditions sont fausses</p>"; // ce n'est ni 8 ni c'est égal à 10
                }
                ?>
            </div>

            <div class="col-md-6">
             <h2 class="alert-info text-center">"L'instruction switch... case"</h2>
             <p>Un exemple simple : <br>
             <code>
             $dept = 75; <br>

                // if($dept ==75) echo 'Paris';<br>
                // if($dept ==92) echo 'Hauts-de-Seine';<br>
                // if($dept ==78) echo 'Yvelines';<br>
                // if($dept ==93) echo 'Seine-Saint-Denis';<br>

                echo "&lt;p class=\"alert alert-success w-75 mx-auto text-center\">";<br>

                switch ($dept) {<br>
                    case 75:<br>
                        echo 'Paris';<br>
                        break;<br>

                    case 92:<br>
                        echo "Hauts-de-Seine";<br>
                        break;<br>

                    case 78:<br>
                        echo 'Yvelines';<br>
                        break;<br>

                    case 93:<br>
                        echo 'Seine-Saint-Denis';<br>
                        break;<br>

                        default:<br>
                        echo "Département inconnu en Île de France";<br>
                        break;<br>
                    }
             </code>
             </p>

             <?php
                $dept = 75;

                // if($dept ==75) echo 'Paris';
                // if($dept ==92) echo 'Hauts-de-Seine';
                // if($dept ==78) echo 'Yvelines';
                // if($dept ==93) echo 'Seine-Saint-Denis';

                echo "<hr>";
                echo "<p class=\"alert alert-success w-75 mx-auto text-center\">";

                switch ($dept) {
                    case 75:
                        echo 'Paris';
                        break;

                    case 92:
                        echo "Hauts-de-Seine";
                        break;

                    case 78:
                        echo 'Yvelines';
                        break;

                    case 93:
                        echo 'Seine-Saint-Denis';
                        break;

                        default:
                        echo "Département inconnu en Île de France";
                        break;
                }
             ?>
            </div>       
        </section>
        <!-- fin row -->

        <section class="row mt-4 p-2">
            <div class="class">
             <h2></h2>
             <p></p>
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