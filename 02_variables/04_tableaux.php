<?php
 require_once '../inc/functions.php'; //appel des fonctions
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
        
    <title>Cours PHP - 04 / Tableaux</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="bg-light">
    <!-- ====================================================== -->
    <!-- en-tête -- HEADER A COMPLETER AVEC NAV EN REQUIRE --   --> 
    <!-- ====================================================== -->
    
    <header class="container-fluid p-4 bg-dark">
        <div class="col-12 text-center text-info">
            <h1 class="display-4">Cours PHP - 04 Tableaux</h1>
            <p class="lead">Les tableaux répresentent un type composé car ils permettent de stocker sous un même nom de variable plusieurs valeurs indépendants. C'est comme un tiroir divisé en compartiments. Chaque compartiment, que nous nommerons "un élément du tableau", est repéré par un indice numérique (le premier ayant par défaut la valeur 0 et non 1). D'où l'expression de "tableaux indicé".</p>
            <?php
                $varOla = "Olá !";
                echo "<p>$varOla tudo bem?</p>";
            ?>
        </div>
    </header>
    <!-- fin container-fluid header -->

    <div class="container justify-content-center bg-light">

        <section class="row m-4 p-4">

            <div class="col-md-6">

                <h2 class="alert-info"01- Les tableaux>01) Les tableaux</h2>

                <p>Un tableau appellé "array" en anglais est une variable amélioré dans laquelle on stocke une multitude de valeurs. <br>
                Ces valeurs peuvent être de n'importe quel type. <br>
                Elles possèdent un indice dont la numérotation commence à 0.</p>
                <p>Méthode 1 pour déclarer un tableau : <br>
                <code> $tableau1 = array('Gabin', 'Arletty', 'Fernandel', 'Dalio', 'Pauline Carton');
                echo $tableau1; </code></p>

                <p>Méthode 2 pour déclarer un tableau : <br>
                <code>$tableau2 = ['France', 'Espagne', 'Italie', 'Portugal'];
                echo;</code></p>

                <?php
                    $var1 = 569874;
                    echo '<p>le contenu de $var1<br>';
                    echo "le contenu de \$var1 : $var1</p>";
                ?>      
            </div>
            <!-- fin col -->

            <div class="col-md-6">
                <h3 class="alert-info">Exemples :</h3>
                <?php
                    $tab[0] = 2021;
                    $tab[1] = 3.1415926535; // le nombre PI https://fr.wikipedia.org/wiki/Pi
                    $tab[2] = "PHP 7";
                    $tab[35] = $tab[2]. " et MySQL";
                    $tab[] = " et là j'ajoute COUCOU !";

                    // debug($tab); // il faut commenter avat de mettre le site à dispo pour le client

                    echo "<p> Nombre de valeurs dans le tableau : " .count($tab). "</p> "; // on compte le nombre de valeurs dans le tableau

                    echo "<p>Le langage préféré de l'open source est le $tab[2]</p>";
                    echo "<p>Utilisez $tab[35] !!!</p>";
                    echo  "<p>Le drapeau français est $tab</p>";


                    $couleurs = array( 
                        'b' => 'bleu', 
                        'bl' => 'blanc', 
                        'r' => 'rouge', 
                    );

                    echo "<p>Le drapeau français est $couleurs[b],  $couleurs[bl], $couleurs[r] </p>";
            
                    
                    debug($couleurs);
            
                ?>
            </div>

            <div class="col-12">
                    <h2>2)Les tableaux associatifs</h2>
                    <p>// 1 tableau associatif (un array pour déterminer le numéro de chaque élément
                // $couleurs = array('b' => 'bleu', 'bl' => 'blanc', 'r' => 'rouge',);
                // dans un tableau associatif nous pouvons choisir le noms des indices
                $couleurs = array(
                    'b' => 'bleu',
                    'bl' => 'blanc',
                    'r' => 'rouge',
                );

                debug($couleurs);

                // un echo d'une des valeurs de notre tableau associatif :

                echo '<p>La première couleur du tableau associatif est le ' .$couleurs['b']. '</p>';
                echo "<p>La première couleur du tableau associatif est le $couleurs[b]</p>";

                // si l'echo est entre guillemets doubles il n'est pas utile de noter l'indice associatif (ici b)  - indice INDISPENSABLE avec des simples quotes >>>> SUPER UTILES avec SQL
         
                echo "<p> Le nombre de valeurs dans le tableau est de : avec count() " .count($couleurs). "</p>";
                echo "<p> Le nombre de valeurs dans le tableau est de :avec sizeof() " .sizeof($couleurs). " </p>";

                ?>
</p>
            </div>

            <div class="col-6">
                    <h2>3)Parcourir un tableau associatif avec <code>foreach</code></h2>
                    <p>Quand il y a 2 variables après "as" celle de gauche parcourt les indices et celle de droite parcourt les valeurs <br>

                    <code>
                    echo "&lt;ol>"; <br>
                    foreach ( $couleurs as $indice => $teinte ) <br>
                        echo "&lt;li>Indice : $indice correspond à $teinte &lt;/li>"
                        <br>
                    }
                    echo "</ol>";
                    </code>

                    <?php
                    echo "<hr>";

                    $contacts = array(
                        'prenom' => 'Vanusa',
                        'nom' => 'Santos',
                        'email' => 'baianissima@gmail.com',
                        'telephone' => '06 26 05 19 15',
                    );

                    echo "<div class=\"border border-success\">";
                    foreach ($contacts as $indice => $infos) {
                       
                        if ($indice == 'prenom') { 
                            echo "<h3 class=\"bg-success\">$infos</h3>"; 
                        } else {
                            echo "<p>$infos</p>";
                        }               
                    }
                    echo "</div>";
                    ?>
            </div>
        </section>
        <!-- fin section row -->

        <section class="row">
            <div class="col-md-5">
                <h2 class="alert-info">4) Tableau multidimensionnels</h2>        
            </div>
            <!-- fin col -->

            <div class="col-5 m-4 p-4">
                <h2 class="alert-info">Codes de la page des exos</h2>

                <p class=alert alert-danger>Tableau associatif dans un <code>SELECT (lbel, option, form-control...)</code><br>
                
                
                <code>echo "<hr><pre class=\"bg-warning\"> EXO : Suite : cette fois-ci mettez les valeurs du tableau dans un select de formulaire</pre>"; <br>

                echo "<hr><pre class=\"bg-warning\"> 2) BOUCLE FOREACH : avec un SELECT, option, value, form-control, et un label</pre>"; <br>

                echo "<label for=\"size2\"> Tailles </label><select class=\"form-control w-25\">"; <br>

                echo "</select>";</code>
            </div>

            <!-- fin col -->
                

                </p>
                       
            </div>
            <!-- fin col -->         
        </section>
        <!-- fin row -->
    </div>
    <!-- fin div container -->

    <!-- ====================================================== -->
    <!--                  FOOTER EN REQUIRE                     --> 
    <!-- ====================================================== -->
    <!-- Ici on a l'includ pour synroniser le code du footer sur toutes les pages du dossier : -->
    <?php require_once '../inc/footer.inc.php'; ?>

    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>
</html>