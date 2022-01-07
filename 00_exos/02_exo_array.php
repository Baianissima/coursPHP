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
   <!-- ====================================================== -->
    <!-- en-tête :  HEADER A COMPLETER AVEC NAV EN REQUIRE      --> 
    <!-- ====================================================== -->
    
    <nav>
        <?php require_once '../inc/navbar.inc.php'; ?>
    </nav>
    
    <header class="container-fluid p-2">
        <div class="col-12 text-center text-info">
            <h1 class="display-4">PHP</h1>
            <p class="lead">Exos / 02 Arrays : les tableaux</p>
        </div>
    </header>
    <!-- fin containeur-fluid -->

    <div class="container mt-4 mx-auto">
        <section class="row">
            <div class="col-sm-6 p-2 m-2 alert alert-info">
                <h3>Méthode 1</h3>
                <?php

                // Déclaration d'un tableau, d'un array :

                // METHODE 1
                $tableau1 = array('Gabin', 'Arletty', 'Fernandel', 'Dalio', 'Pauline Carton');
                echo $tableau1; // erreur de type "array to string conversion", car on ne peut pas afficher directement un tableau

                //Le white s'affiche : Parse error: syntax error, unexpected token "&", expecting end of file in C:\xampp\htdocs\coursPHP\00_exos\02_exo_array.php on line 39

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

            <div class="col-5">

                <div class="col- p-2 m-2 alert alert-info">
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

                <div class="col-sm-12 p-2 m-2 alert alert-info">
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

        </section>
         <!-- fin section row -->
         

        <section class="row">
            <h2 class="m-4 p-4">Les tableaux associatifs</h2>
            <div class="col-sm-7 m-2 p-2 alert alert-info">
                <h3 class="m-4 p-4">Les indices</h3>
                1 tableau associatif (un array pour déterminer le numéro de chaque élément
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

            <p>Dans un tableau associatif nous pouvons choisir le nom des indices <br> <code>$couleurs = array()</p><br>
                'b' => 'bleu',<br>
                'bl' => 'blanc',<br>
                'r' => 'rouge',<br>
                );</code></p>

                <?php 
                // tableau associatif
                // dans un tableau associatif nous pouvons choisir le nom des indices 
                
                $couleurs = array(
                    'b' => 'bleu',
                    'bl' => 'blanc',
                    'r' => 'rouge',
                );

                debug($couleurs);
                // un echo d'une des valeurs de notre tableau associatif
                echo '<p>La première couleur du tableau associatif est le ' .$couleurs['b']. '</p>';
                echo "<p>La première couleur du tableau associatif est le $couleurs[b]</p>"; // si l'écho est entre guillemets doubles il n'est plus util de noter l'indice associatif (ici b) entre simple quote >>>> INDISPENSABLE avec des requêtes SQL

                echo "<p> le nombre de valeurs dans le tableau est de : avec count() "  .count($couleurs). "</p>";
                echo "<p> le nombre de valeurs dans le tableau est de :  avec sizeof() "  .sizeof($couleurs). " </p>";

                echo "<p> le drapeau français est $couleurs[b], $couleurs[bl], $couleurs[r].</p>";
                ?> 
            </div>
             <!-- fin col -->


            <div class="col-sm-4 m-2 p-2 alert alert-info">
                <h2 class="m-4 p-4" alert-info">Tableau associatif dans un &lt;SELECT> <br>
                (avec label, option, form-control</h2>

                <p>Pour mettre un tableau associtif dans un select, avec une boucle foreach qui fabrique les <code>&lt;option value""> <br>              
                
                    echo "&lt;label for=\"size2\"> Tailles &lt;/label>&lt;select class=\"form-control w-25\">"; <br>

                    foreach( $tailles2 as $indice2 => $size2 ) { <br>
                            echo "&lt;option value=\"$indice2\"> $size2 &lt;/option>"; <br>
                        } <br>
                    
                    echo "&lt;/select>";
                    </p>
            </div>
        </section>
        <!-- fin row -->

         
        <section class="row">
            <div class="col-sm-12 p-2 m-2 alert alert-info">
                <h2>EXOS :</h2>
                
                    <p>1) Ajouter la phrase "Bleu, blanc, rouge":</p>
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
            <div class="col-md-12 p-2 m-2">
                <h3 class="alert-info">4) Tableau multidimensionnels</h3>        
                
                <?php
                foreach ($contacts as $personne) {
                    echo "<li> $personne </li>";
                }
                echo "</ul>";

                foreach ($contacts as $indice => $infos) {
                       
                    if ($indice == 'prenom') { 
                        echo "<h3 class=\"bg-white\">$infos</h3>"; 
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

                    debug($tableau_multi); // fonction pour afficher tout le tableau
                    debug($tableau_multi[2]); // infos sur l indice 2 du tableau
                    debug($tableau_multi[1]['prenom']); // sur l indiice 1 la valeur du nom dans le sous-tableau

                    // BOUCLE FOR

                    echo "<hr> <pre class=\"bg-white\">BOUCLE FOR </pre>";

                    // Pour parcourir
                    for ($i = 0; $i < count($tableau_multi); $i++) {
                        // echo '<p>' .$tableau_multi[$i]['prenom']. '</p>'; // tant que $I est inférieur au nombre des élements dans le tableau, que l on compte avec count(), on entre dans la boucle

                        echo "<p>" .$tableau_multi[$i]['prenom']. " " .$tableau_multi[$i]['nom']. "</p>";
                        // debug($tableau_multi[$i]);
                        // echo "<p>$tableau_multi[$i]['prenom']</p>"; ici les guillemets ne font pas fonctionner le code du formateur
                    }

                    echo "<hr>";


                    // BOUCLE FOREACH 1

                       // Pour parcourir avec une boucle foreach, une autre méthode
                       // On psse en variable les contenus de chaque indice du tableau et en ciblant les indices nommés ( le prénom en l occurrence) des ous-tableaux associatifs
                    echo "<hr> <pre class=\"bg-white\">1) BOUCLE FOREACH </pre>";

                    echo "<p>";
                    foreach($tableau_multi as $indice => $prenom) {
                        // debug($prenom);
                        echo '<strong>' .$tableau_multi[$indice]['prenom']. ' </strong> - '; // ici on met les prénoms en gras avec strong et entre des tirets
                    }
                    echo "</p>";

                    // BOUCLE FOREACH 2
                    echo "<hr> <pre class=\"bg-white\">2) BOUCLE FOREACH</pre>";

                    echo "<p>";
                    foreach($tableau_multi as $indice => $acteurs) {
                        // debug($prenom);
                        echo '<strong>' .$acteurs['prenom']. ' ' . $acteurs['nom']. ' </strong> - ';
                    }
                    echo "</p>";

                    //EXO : Faire un tableau $tailles avec des tailles de vetements SMALL, MEDIEUM, LARGE et EXTRA-LARGE et les afficher dans une boucle foreach dans une ul
                    echo "<hr> <pre class=\"bg-white\">EXO : Faire un tableau $tailles avec des tailles de vetments EXTRA, SMALL ou XL et les afficher dans une boucle foreach dans une ul</pre>";
                    
                    echo "<ul>";
                    $tailles = ['s', 'm', 'l', 'xl'];
                    //$tailles_bis = array ('s', 'm', 'l', 'xl');
                    debug($tailles);
                    echo "</ul>";

                    echo "<ul>";
                    foreach( $tailles as $indice => $size ) {
                        echo "<li>" .$indice. " pour " .$size. "</li>";
                    }
                    echo "</ul>";
            
                    //EXO :  Le même dans un tableau associatif appelé $tailles2
                    echo "<hr> <pre class=\"bg-white\">EXO : Le même dans un tableau associatif</pre>";

                    echo "<ul>";
                    $tailles2 = [
                        's' => 'S - small', 
                        'm' => 'M - medium', 
                        'l' => 'L - large', 
                        'xl' => 'XL - extra large'
                    ];
                    echo "</ul>";



                    //BOUCLE FOREACH : les tailles - tableau 2
                    echo "<hr><pre class=\"bg-white\">BOUCLE FOREACH : les tailles - tableau 2</pre>";

                    echo "<ul>";
                    foreach( $tailles2 as $indice2 => $size2 ) {
                        echo "<li> $indice2 pour $size2 </li>";
                    }
                    echo "</ul>";



                    // EXO : Suite : cette fois-ci mettez les valeurs du tableau dans un select de formulaire
                    echo "<hr><pre class=\"bg-white\"> EXO : Suite : cette fois-ci mettez les valeurs du tableau dans un select de formulaire</pre>";

                    echo "<hr><pre class=\"bg-white\"> 2) BOUCLE FOREACH : avec un SELECT, option, value, form-control, et un label</pre>";

                    echo "<label for=\"size2\"> Tailles </label><select class=\"form-control w-25\">";
                    
                    foreach( $tailles2 as $indice2 => $size2 ) {
                        echo "<option value=\"$indice2\"> $size2 </option>";
                    }
                    echo "</select>";


                    // autre exemple :
                    echo "<hr><pre class=\"bg-white\">Autre exemple de tableau assocaitif en SELECT></pre>";

                    $eleve3= [
                        'rd' => 'Redha', 
                        'vt' => 'Vincent', 
                        'ar' => 'Arnold', 
                        'nd' => 'Nadia',
                        'ms' => 'Mostapha'
                    ];
        
                    echo "<label for=\"size2\">Eleves </label><select class=\"form-control w-25\">";
                    
                    foreach( $eleve3 as $indice3 => $prenom3 ) {
                        echo "<option value=\"$indice3\"> $prenom3</option>";
                    }
                    echo "</select>";
                ?>

                    <!-- le select copié après Crtl U commenté :
                    <label for="size2"> Tailles </label>
                        <select class="form-control w-25">
                            <option value="s"> S - small </option>
                            <option value="m"> M - medium </option>
                            <option value="l"> L - large </option>
                            <option value="xl"> XL - extra large </option>
                        </select> -->
                    
            </div>
            <!-- fin col -->

            <div class="col-5 m-2 p-2">
                <h3 class="alert-info"></h3>       
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
</htm