<?php require_once '../inc/functions.php'; 
 //appel de mon fichier de la page fonctions
 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- required my tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
    <title>Cours PHP - Exo 02 Array</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="bg-light">
    <!-- =================================== -->
    <!-- en-tête -->
    <!-- =================================== -->
    
    <header class="container-fluid p-4 bg-dark">
        <div class="col-12 text-center text-info">
            <h1 class="display-4">Cours PHP - Exos</h1>
            <p class="lead">02 Arrays</p>
        </div>
    </header>
    <!-- fin containeur-fluid -->

    <div class="container m-4 mx-auto bg-light">
        <section class="row">
            <div class="col-sm-5 p-4 m-4 alert alert-info">
                <h3>Méthode 1</h3>
                <?php

                // Déclaration d'un tableau, d'un array :

                // METHODE 1
                $tableau1 = array('Gabin', 'Arletty', 'Fernandel', 'Dalio', 'Pauline Carton');
                echo $tableau1; // erreur de type "array to string conversion", car on ne peut pas afficher directement un tableau

                //Le warning s'affiche : Parse error: syntax error, unexpected token "&", expecting end of file in C:\xampp\htdocs\coursPHP\00_exos\02_exo_array.php on line 39

                echo "<pre>"; // la balise pre permet de préserver l'affichage après exécution
                print_r( $tableau1 ); // print_r affiche le contenu du tableau avec les indices
                echo "</pre>";
             
                echo "<pre>"; // <pre> permet de formater le texte (saut de ligne typo à chasse fixe)
                var_dump( $tableau1);  // var_dump affiche le conteu d'un array avec types des valeurs
                echo "</pre>";

                // METHODE 2
                $tableau2 = ['France', 'Espagne', 'Italie', 'Portugal'];
                echo "<pre>";
                var_dump( $tableau2);  // var_dump affiche le conteu d'un array avec types des valeurs
                echo "</pre>";

                // METHODE 3 : avec function créé dans fichier fonctions/dossier inc, la variable jeprint_r exécute ce qu'on met entre parenthèses
                    // function jeprint_r($mavar) {
                    // echo "<pre>";
                    // print_r($mavar);
                    // echo "</pre>";
                    // }
                
                jeprint_r($tableau2);

                debug($tableau2);
                // pour afficher une valeur du tableau on écrit son indice entre crochets,
                echo $tableau2 [2];

                debug($tableau2[2]);

                // le crochet vide signifie que l'on ajoute une valeur à la fin du tableau : ici on ajoute "Suisse"
                $tableau2[] = "Suisse";

                // $tableau2[0] = "Suisse"; // si on met un indice entre les crochets on va remplacer la valeur, le tableau aura toujours la même longueur
                debug($tableau2);

                // 1 tableau associatif (un array pour déterminer le numéro de chaque élément
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

            </div>
            <!-- fin div col -->

            <div class="col-sm-5 p-4 m-4 alert alert-info">
                <h3>Méthode 2</h3>
                <?php
                    // METHODE 2
                $tableau2 = ['France', 'Espagne', 'Italie', 'Portugal'];
                echo "<pre>";
                var_dump( $tableau2);  // var_dump affiche le conteu d'un array avec types des valeurs
                echo "</pre>";
                ?>
            </div>
            <!-- fin div col -->

        </section>
         <!-- fin section row -->

         <section class="row">
             <div class="col-sm-5 p-4 m-4 alert alert-info">
                    <h3>Méthode 3</h3>

                    <?php
                    // METHODE 3 : avec function créé dans fichier fonctions/dossier inc, la variable jeprint_r exécute ce qu'on met entre parenthèses
                    
                    // function jeprint_r($mavar) {
                    // echo "<pre>";
                    // print_r($mavar);
                    // echo "</pre>";
                    // }
                
                jeprint_r($tableau2);

                debug($tableau2);
                // pour afficher une valeur du tableau on écrit son indice entre crochets,
                echo $tableau2 [2]. "<br>";

                debug($tableau2[2]);

                // le crochet vide signifie que l'on ajoute une valeur à la fin du tableau : ici on ajoute "Suisse"
                $tableau2[] = "Suisse";

                // $tableau2[0] = "Suisse"; // si on met un indice entre les crochets on va remplacer la valeur, le tableau aura toujours la même longueur
                debug($tableau2);

                // 1 tableau associatif (un array pour déterminer le numéro de chaque élément
                // $couleurs = array('b' => 'bleu', 'bl' => 'blanc', 'r' => 'rouge',);
                // dans un tableau associatif nous pouvons choisir le noms des indices
                $couleurs = array( 
                    'b' => 'bleu',
                    'bl' => 'blanc', 
                    'r' => 'rouge', 
                );

                debug($couleurs);
                ?>
             </div>
             <!-- fin col -->
             

             <div class="col-sm-5 p-4 m-4 alert alert-info">
                <h3>Tableau associatif</h3>
                // 1 tableau associatif (un array pour déterminer le numéro de chaque élément
                // $couleurs = array('b' => 'bleu', 'bl' => 'blanc', 'r' => 'rouge',);
                // dans un tableau associatif nous pouvons choisir le noms des indices
                
                <?php
                
                $couleurs = array( 
                    'b' => 'bleu', 
                    'bl' => 'blanc', 
                    'r' => 'rouge', 
                );

                debug($couleurs);
                ?>

             </div>
             <!-- fin col -->
         </section>

         <section class="row">
            <div class="col-sm-12 p-4 m-4 alert alert-info">
                <h3>EXOS :</h3>
                
                    Ajouter la phrase "Bleu, blanc, rouge":
                    <?php
                        echo "<p>Le drapeau français est $couleurs[b],  $couleurs[bl], $couleurs[r] </p>";
                    
                    
                    // On va faire une boucle pour afficher les valeurs d'un tableau
                    // Foreach >>> pour chaque >>> le moins le plus simples

                    
                    echo "<ul>";
                    foreach ($tableau1 as $acteurs) {
                        echo "<li>" .$acteurs. "<li>";
                    }
                    echo "</ul>";

                    //une nouvelle foreach avec le tableau2
                    echo "<ol>";
                    foreach ($tableau2 as $pays) {
                        echo "<li>" .$pays. "<li>";
                    }
                    echo "</ol>";

                    $tableau1[] = "Vanda"; //rajout d'une valeur au tableau

                    echo "<ol>";
                    foreach( $tableau1 as $indice => $acteurs ) {
                        echo "<li>Indice : $indice correspond à $acteurs </li>";
                        
                        // quand il y a 2 variables après "as" celle de gauche parcourt les indices et celle de droite parcourt les valeurs
                        // echo '<li>Indice : ' .$indice. ' correspond à ' .$acteurs. ' </li>";
                    }
                    echo "</ol>";

                    // 1. Déclarer un tableau associatif "$contacts" avec les indices prenom, nom, email et téléphone et vous y mettez les valeurs correspondantes à un seul contact.

                    // 2. Puis avec une boucle foreach vous affichez les valeurs dans une ul
                    // 3. Puis dans une autre boucle vous affichez les valeurs dans des p, sauf le prénom qui doit être dans un h3 (aide >>> if else)
                    // 

                    // Exo 1
                    $contacts = array(
                        'prenom' => 'Vanusa',
                        'nom' => 'Santos',
                        'email' => 'baianissima@gmail.com',
                        'telephone' => '06 26 05 19 15',
                    );

                    //Exo 2
                    echo "<ul>";
                    foreach($contacts as $infos) {
                        echo "<li> $infos</li>";

                    }
                    echo "</ul>";


                    //Exo 3
                    foreach ($contacts as $indice => $infos) {
                        // echo "<p>$indice == $infos</p>";
                        if ($indice == 'prenom') { 
                            echo "<h3>$infos</h3>"; 
                        } else {
                            echo "<p>$infos</p>";
                        }               
                    }             
                    ?>            
            </div>
         </section>
         <!-- fin row -->

         <section class="row">
            <div class="col-md-12 p-4 m-4">
                <h2 class="alert-info">4) Tableau multidimensionnels</h2>        
                
                <?php
                foreach ($contacts as $personne) {
                    echo "<li> $personne </li>";
                }
                echo "</ul>";

                foreach ($contacts as $indice => $infos) {
                       
                    if ($indice == 'prenom') { 
                        echo "<h3 class=\"bg-success\">$infos</h3>"; 
                    } else {
                        echo "<p>$infos</p>";
                        }               
                    }
                    echo "<hr>";

                    // tableaux multidimensionnels : un tableau avec des "sous-tableaux"
                   
                    $tableau_multi = array (
                        0 => array (
                            'prenom' => 'Jean',
                            'nom' => 'Dujardin',
                            'email' => 'j.dujardin@gmail.com',
                            'tel' => ' 06 20 30 40 50 70',
                        ),

                        1 => array (
                            'prenom' => 'Marion',
                            'nom' => 'Cotillard',
                            'email' => 'm.cotillard@gmail.com',
                            'tel' => ' 06  70 60 50 40 30',
                        ),

                        2 => array (
                            'prenom' => 'Bruce',
                            'nom' => 'Wayne',
                        ),
                    );

                    debug($tableau_multi);
                    debug($tableau_multi[2]);
                    debug($tableau_multi[1]['prenom']);


                    ?>
            
            
            
            </div>
            <!-- fin col -->

            <div class="col-5 m-4 p-4">
                <h2 class="alert-info"></h2>       
            </div>
            <!-- fin col -->         
        </section>
        <!-- fin row -->

         <section class="row">
             <div class="col-5">
            </div>


             <div class="col-5">

             </div>
         </section>
         <!-- fin row -->
    </div>
    <!-- fin div container -->

   
    <!-- Optional JavaScript -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>
</htm